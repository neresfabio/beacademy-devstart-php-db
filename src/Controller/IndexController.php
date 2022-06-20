<?php

declare(strict_types = 1);

namespace App\Controller;

class IndexController extends AbstractController
{
    public function indexAction():void
    {
        //include dirname(__DIR__).'/View/Index/index.php';
        parent::render('Index/index');
    }

    public function loginAction():void
    {
        //include dirname(__DIR__).'/View/Index/login.php';
        parent::render('Index/login');
    }
}