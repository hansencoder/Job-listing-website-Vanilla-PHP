<?php

// return [
//     '/' => 'controller/index.php',
//     '/listings' => 'controller/listings/index.php',
//     '/listing/create' => 'controller/listings/create.php',
//     '404' => 'controller/errors/404.php'
//   ];

$router->get('/', 'controllers/home.php');
$router->get('/listings', 'controllers/listings/index.php');
$router->get('/listing/create', 'controllers/listings/create.php');


?>