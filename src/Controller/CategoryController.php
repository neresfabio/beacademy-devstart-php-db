<?php

declare(strict_types = 1);

namespace App\Controller;

use App\Connection\Connection;

class CategoryController extends AbstractController
{
    public function listAction():void
    {
        $con = Connection::getConnection();

        $result = $con->prepare('SELECT * FROM tb_category');
        $result->execute();

        //$data = $result->fetch(\PDO::FETCH_ASSOC);

        //include dirname(__DIR__).'/View/category/list.php';
        
        parent::render('category/list', $data);   
    }
}