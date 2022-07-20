<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\Controller;
use Alura\Cursos\Controller\NewCourseForm;
use Alura\Cursos\Controller\ListCourses;
use Alura\Cursos\Controller\PersistCourse;

$path = $_SERVER['PATH_INFO'];
$routes = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($path, $routes)) {
    http_response_code(404);
}

$controllerFQCN = $routes[$path];

/** @var Controller $controller */
$controller = new $controllerFQCN();
$controller->handleRequest();

