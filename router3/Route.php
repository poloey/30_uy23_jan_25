<?php
class Route {
  public static $routes;
  public static function get($uri, $controller) {
    self::$routes[$uri] = $controller;
  }
  public static function run($uri) {
    if (array_key_exists($uri, self::$routes)) {
      return self::$routes[$uri];
    }else {
      return 'views/notFound.php';
    }
  }
}
