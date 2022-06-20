<?php

ini_set('display_errors', 1);

include '../vendor/autoload.php';

use App\Controller\ErrorController;

// use App\Connection\Connection;

// $connection = Connection::getConnection();

// $query = 'SELECT * FROM tb_category;';

// $preparacao = $connection->prepare($query);
// $preparacao->execute();

// while($registro = $preparacao->fetch()){
//     var_dump($registro);
// }

// $database = ;
// $username = ;
// $passoword = ;

// $connection = new PDO('');

$url = explode('?',$_SERVER['REQUEST_URI'])[0];

$routes = include '../config/routes.php';

// //echo $url;
// // $routes = [
// //     '/' => [
// //         'controller' => IndexController::class,
// //         'method' => 'indexAction'
// //     ],
// //     '/produtos' => [
// //         'controller' => ProductController::class,
// //         'method' => 'listAction',
// //     ],
// // ];

if(false === isset($routes[$url])){
    // $err = new ErrorController();
    // $err->notFoundAction();

    (new ErrorController())->notFoundAction();
    exit;
}

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName())->$methodName();

// // if($url === '/'){
// //     $c = new  IndexController();
// //     $c->indexAction();
// // }elseif($url === '/login'){
// //     $c = new  IndexController();
// //     $c->loginAction();
// // }elseif($url === '/Product'){
// //     $p = new ProductController();
// //     $p->listAction();
// // }else{
// //     $er = new  ErrorController();
// //     $er->notFoundAction();
// // }