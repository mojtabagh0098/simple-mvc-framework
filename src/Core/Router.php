<?php
namespace App\Core;

class Router
{
    private $routes = [];

    public function addRoute($method, $route, $controller, $action) {
        $this->routes[$method][$route] = ['controller' => $controller, 'action' => $action];
    }
    public function dispatch()
    {
        $uri = strtok($_SERVER['REQUEST_URI'], '?');
        $method = $_SERVER['REQUEST_METHOD'];
        if (strpos($_SERVER['REQUEST_URI'], '/index.php') !== false) {
            $uri = str_replace('/index.php', '', $uri);
        }
        if (array_key_exists($uri, $this->routes[$method])) {
            $controller = $this->routes[$method][$uri]['controller'];
            $action = $this->routes[$method][$uri]['action'];

            $controller = new $controller();
            $controller->$action();
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }
}
?>