<?php
namespace Galaxytw\Core;

define('TEMPLATE_ENGINE', 'TwigView');

abstract class View
{
	public abstract function assign($datas = array());
	public abstract function render($template="", $ext);
	public abstract function fetch($template="", $ext);
	public static function getInstance($path){
		if (!defined('TEMPLATE_ENGINE')){
			die('Please specify a template engine in config.php');
		}
		$class = "Galaxytw\\Core\\".TEMPLATE_ENGINE;
		return new $class($path);
	}
}

class TwigView
{
	private $engine;
	private $datas;
	public function __construct($path){
		$this->path = $path;
		\Twig_Autoloader::register();
		$loader = new \Twig_Loader_filesystem($path);
		$this->engine = new \Twig_Environment($loader, array('cache'=>'tpl_c'.'/'));
	}
	
	public function assign($datas){
		$this->datas = $datas;
	}
	
	public function render($template, $ext){
		echo $this->fetch($template, $ext);
	}
	
	public function fetch($template, $ext){
		$file = implode('/', explode('_', $template)).'.'.$ext;
		$twig = $this->engine->loadTemplate($file);
		return $twig->render($this->datas);
	}
	
	
}