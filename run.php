<?php

/**
 *
* Copyright(c) 201x,
* All rights reserved.
*
*@Effect:
* 
*@author bikang@book.sina.com
*
* @date:2017年3月28日
*
* @version:1.0
 */
define('BASE_DIR', dirname(__FILE__));
//自动包含
function autoLoadFile($classname){
	$find_file = BASE_DIR."/".$classname.".php";
	if(is_file($find_file)){
		include_once $find_file;
	}
}
spl_autoload_register("autoLoadFile");


$timer = new TimerServer();
$timer->run();