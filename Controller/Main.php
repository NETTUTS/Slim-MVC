<?php

namespace Controller;

Class Main extends \NetTuts\Controller
{
	public function index()
	{
		$this->render("test", array("title" => $this->data->message, "name" => "Home")); 
	}

	public function test($title)
	{
		$this->render("test", array("title" => $title, "name" => "Test"));
	}

	public function notFound()
	{
		$this->render("error", array(), 404);
	}
}

