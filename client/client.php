<?php

require('client.include.php');

class INDEX extends Module{
	function _default(){
		$this->display('client.tpl');		
	}
}

$INDEX = new INDEX('Index');
?>