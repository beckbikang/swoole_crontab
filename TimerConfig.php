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

class TimerConfig{
	
	public static $task_list = 
	array(
			array(
					"time"=>1000,
					"func"=> "MyServer::timeCheck",
					"type"=> "time1",
			)
			
	);

}