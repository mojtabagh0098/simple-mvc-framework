<?php

use App\Core\Router;
use App\Controller\HomeController;

$routes = new Router();

$routes->addRoute('GET', "/", HomeController::class, "index");
$routes->addRoute('GET', "/home", HomeController::class, "index");

return $routes;