<?php

class Router {
  protected $routes = [];

  public function registerRouter($method, $uri, $controller) {
    $this->routes[] = [
      'method' => $method,
      'uri' => $uri,
      'controller' => $controller
    ];
  }
  /**
   * Add get route
   * 
   * @param string $uri
   * @param string $controller
   * @return void 
   */

  public function get($uri, $controller) {
      $this->registerRouter('GET', $uri, $controller);
  }

  /**
   * Add POST route
   * 
   * @param string $uri
   * @param string $controller
   * @return void 
   */

  public function post($uri, $controller) {
      $this->registerRouter('POST', $uri, $controller);
  }
  /**
   * Add put route
   * 
   * @param string $uri
   * @param string $controller
   * @return void 
   */

  public function put($uri, $controller) {
      $this->registerRouter('PUT', $uri, $controller);
  }
  /**
   * Add delete route
   * 
   * @param string $uri
   * @param string $controller
   * @return void 
   */

  public function delete($uri, $controller) {
      $this->registerRouter('DELETE', $uri, $controller);
  }

    /**
      * Route the request
      * @param string $method
      * @param string $uri
      * @return void
      */

  public function route($method, $uri) {
    foreach ($this->routes as $route) {
      if ($route['uri'] === $uri && $route['method'] === $method) {
        require basepath($route['controller']);
        return;
      }
    }
    http_response_code(404);
    loadView('errors/404');
  }
}

?>;
