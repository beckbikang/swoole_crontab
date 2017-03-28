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

class MyServer {
	
	public static function timeCheck(){
		$cmd = "ls -la ";
		//echo $cmd."\n";
		exec($cmd);
	}
	
}
