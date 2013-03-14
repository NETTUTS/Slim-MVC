<?php

$settings = array(
	'view' => new \Slim\Extras\Views\Twig(),
	'templates.path' => '../Views',
	'model' => (Object)array(
		"message" => "Hello World"
	)
);

return $settings;
