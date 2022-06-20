<?php

declare(strict_types = 1);

namespace App\Controller;

class ProductController extends AbstractController
{
    public function listAction():void
    {
        // include dirname(__DIR__).'/View/Product/list.php';
        parent::render('Product/list');
    }

    public function addAction():void
    {
        // include dirname(__DIR__).'/View/Product/add.php';
        parent::render('Product/add');
    }

    public function editAction():void
    {
        //include dirname(__DIR__).'/View/Product/edit.php';
        parent::render('Product/edit');
    }
}