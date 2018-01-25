<?php
class Route {
  public $routes = [];
  public function add($uri, $controller) {
    $this->routes[$uri] = $controller;
  }
  public function run($uri) {
    if (array_key_exists($uri, $this->routes)) {
      return $routes[$uri];
    }else {
      return 'views/notFound.php';
    }
  }


}