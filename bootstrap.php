<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once dirname(__FILE__).'/lib/Twig/Autoloader.php';
require_once 'TwigView.php';
$view = Galaxytw\Core\View::getInstance('tpl');  

//Twig_Autoloader::register(true);


//$loader = new Twig_Loader_Filesystem('.');
//$twig = new Twig_Environment($loader);

//$template = $twig->loadTemplate('test.html');

$navigation = array();
$navigation[0]['caption'] = 'test1';
$navigation[0]['href'] = 'test1.iwant-in.net';
$navigation[1]['caption'] = 'test2';
$navigation[1]['href'] = 'test2.iwant-in.net';

$a_variable  = "This is a Book.";

//echo $template->render(array(
//		'navigation'=>$navigation,
//		'a_variable'=>$a_variable
//	 ));
$view->assign(array(
	'navigation'=>$navigation,
	'a_variable'=>$a_variable
));
$view->render('test', 'html');

