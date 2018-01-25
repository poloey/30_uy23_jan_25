<?php 
$uri = trim( $_SERVER['REQUEST_URI'], '/');


require 'Route.php';
$route = new Route();
$route->add('', 'controllers/homeController.php');
$route->add('about', 'controllers/aboutController.php');
$route->add('contact', 'controllers/contactController.php');
require $route->run($uri);


