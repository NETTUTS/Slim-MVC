<?php

require ("../vendor/autoload.php");

$router = new \NetTuts\Router;

$routes = array(
	'/' => '',
	'/test/:title' => "Main:test@get"
);

$router->addRoutes($routes);

$router->set404Handler("Main:notFound");

$router->run();

