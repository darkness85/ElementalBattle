<?php

// error_reporting (E_ALL);
if (!isset($_SERVER['SERVER_NAME']) || $_SERVER['SERVER_NAME'] != 'localhost'){

    if (defined('E_FATAL')) error_reporting(E_FATAL | E_ERROR);
        else error_reporting (E_ERROR);
}else{
        //error_reporting (E_ERROR & ~E_NOTICE);
        error_reporting (E_ALL ^ E_NOTICE);
		//error_reporting (E_ALL);
}

// Display Error
if (!defined('DISP_ERR'))
        ini_set("display_errors", 0);
else
        ini_set("display_errors", 1);

	
define('CLIENT_ROOT', dirname(__FILE__)."/../client");
define('SERVER_ROOT', dirname(__FILE__)."/../server");

include('smarty_libs/Smarty.class.php');
$smarty = new Smarty;

switch(CURRENT_MODE){
	case 'client':
		$smarty->template_dir = CLIENT_ROOT ."/templates";
		$smarty->compile_dir = CLIENT_ROOT ."/templates_c";
		break;
	
}

require_once('appCore.php');

/* framework class */
abstract class Module
{
	var $template;
	var $title;

	abstract function _default();

	function display($tpl='')
	{
		global $smarty;

		if ($tpl=='')
			$smarty->display($this->template);
		else
			$smarty->display($tpl);
	}

	function __construct($title, $action = "a")
	{
		global $smarty;
		$this->title = $title;
		$smarty->assign("PAGE_TITLE", $title);
		
		$this->template = str_replace(".php", ".tpl", basename($_SERVER['PHP_SELF']));

		if (isset($_REQUEST[$action]))
		{
			$a = $_REQUEST[$action];
			$this->$a();
			exit;
		}
		$this->_default();
	}

	protected function update_title($new_title){
	    global $smarty;
        $this->title = $new_title;
        $smarty->assign("PAGE_TITLE", $this->title);
	}
}
?>