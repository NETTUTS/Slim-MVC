<?php

require ("../vendor/autoload.php");

$router = new \NetTuts\Router;

$routes = array(
	'/' => '',
	'/test/:title' => "Main:test@get",
	
	array('/arr', "Main:index@get"),
	
	'/demo' => array(
		"get" => "Main:test2",
		"post" => "Main:test3"
	)
);

$router->addRoutes($routes);

$router->set404Handler("Main:notFound");

$router->run();

