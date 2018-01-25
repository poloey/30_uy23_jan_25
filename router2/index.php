<?php 

$route = trim( $_SERVER['REQUEST_URI'], '/');
$routes = [
  '' => 'controllers/homeController.php',
  'about' => 'controllers/aboutController.php',
  'contact' => 'controllers/contactController.php'
];

if (array_key_exists($route, $routes)) {
  require $routes[$route];
} else {
  require 'views/notFound.php';
}
