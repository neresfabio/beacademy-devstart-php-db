<?php

declare(strict_types = 1);

use App\Controller\IndexController;
use App\Controller\CategoryController;
use App\Controller\ProductController;


function createRouter(string $controllerName, string $methodName)
{
    return [
        'controller' => $controllerName,
        'method' => $methodName,
    ];
}

$routes = [
    '/' => createRouter(IndexController::class,'indexAction'),
    '/produtos' => createRouter(ProductController::class,'listAction'),
    '/produtos/novo' => createRouter(ProductController::class,'addAction'),
    '/categorias' => createRouter(ProductController::class,'listAction'),
];

return $routes;