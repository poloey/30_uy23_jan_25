<?php
// $name = '/tawhid';
// echo trim($name, '/');
// die;
$path =  trim( $_SERVER['REQUEST_URI'], '/') ;
$routes = [
  '' => 'controllers/indexController.php',
  'about' => 'controllers/aboutController.php',
];
if (array_key_exists($path, $routes)) {
  require $routes[$path];
}else {
  require 'controllers/notFoundController.php';
}

