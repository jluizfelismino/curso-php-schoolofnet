<?php

class Vehicle
{
//atributos
	public $brand;
	public $color;
	public $engine;

	public function __construct($brand = null,$color = null)
	{
		$this->brand = $brand;
		$this->color = $color;

	}

	/*public function __construct($brand = null,$color = null)
	{
		$this->brand = $brand;
		$this->color = $color;
	}*/

//metodo é uma função de uma classe
	public function getEngine($type = "horsepower")
	{
		return "{$this->engine} {$type}";
	}
}

