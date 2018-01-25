<?php
require 'Route.php';
$uri = trim($_SERVER['REQUEST_URI'], '/');
Route::get('', 'controllers/homeController.php');
Route::get('about', 'controllers/aboutController.php');
Route::get('contact', 'controllers/contactController.php');
require Route::run($uri);

