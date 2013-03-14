<?php

namespace NetTuts;

Class Controller extends \Slim\Slim
{
	protected $data;

	public function __construct()
	{
		$settings = require("../settings.php");
		if (isset($settings['model'])) {
			$this->data = $settings['model'];
		}

		parent::__construct($settings);
	}

	public function render($name, $data = array(), $status = null)
	{
		if (strpos($name, ".php") === false) {
			$name = $name . ".php";
		}
		parent::render($name, $data, $status);
	}	
}

