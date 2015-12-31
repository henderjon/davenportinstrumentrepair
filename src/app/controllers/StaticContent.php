<?php

namespace Controllers;

class StaticContent extends Controller {

	protected $widgets, $layout;

	function init(){
		$this->widgets = $this->di->get("views.dispatcher");
		$this->layout  = $this->di->get("layout.main");

		if($logger = $this->di->get("log.error.request")){
			$this->setLogger($logger);
		}
	}

	function getNav($page){
		$navArr = [
			['index',      'About',               'img' => 'Saxes_WebReady.jpg'],
			['locations',  'Locations',           'img' => 'Guitar_WebReady.jpg'],
			['keenclamps', 'Keen Clamp&reg;',     'img' => 'Clamp_WebReady.jpg'],
			['pricing',    'Call us for pricing', 'img' => 'Trumpet_WebReady.jpg'],
		];

		$nav = "";
		foreach($navArr as $k => $v){
			$nav .= sprintf('<a href="%s" class="%s">%s</a>', $v[0], ($k == $page ? "sel" : ""), $v[1]);
		}
		return $nav;
	}

	function index(){
		$this->layout->setView($this->widgets->get("index.php"));
		$this->layout->setMany([
			"img" => "img/Saxes_WebReady.jpg",
			"nav" => $this->getNav(0),
		]);
		return $this->layout;
	}

	function about(){
		$this->layout->setView($this->widgets->get("index.php"));
		$this->layout->setMany([
			"img" => "img/Saxes_WebReady.jpg",
			"nav" => $this->getNav(0),
		]);
		return $this->layout;
	}

	function locations(){
		$this->layout->setView($this->widgets->get("locations.php"));
		$this->layout->setMany([
			"img" => "img/Guitar_WebReady.jpg",
			"nav" => $this->getNav(1),
		]);
		return $this->layout;
	}

	function keenclamps(){
		$this->layout->setView($this->widgets->get("keenclamps.php"));
		$this->layout->setMany([
			"img" => "img/Clamp_WebReady.jpg",
			"nav" => $this->getNav(2),
		]);
		return $this->layout;
	}

	function pricing(){
		$this->layout->setView($this->widgets->get("pricing.php"));
		$this->layout->setMany([
			"img" => "img/Trumpet_WebReady.jpg",
			"nav" => $this->getNav(3),
		]);
		return $this->layout;
	}

	function addtocart(){
		$this->layout->setView($this->widgets->get("addtocart.php"));
		$this->layout->setMany([
			"img" => "img/Clamp_WebReady.jpg",
			"nav" => $this->getNav(2),
		]);
		return $this->layout;
	}

}
