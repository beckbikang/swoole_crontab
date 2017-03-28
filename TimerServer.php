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

interface Runner{
	function onTimer($time,$funcName);
	function  onTimerAfter($time,$funcName,$params);
	function onCancel($timerId);
	function onDefer($funcName);
}

class TimerServer{
	
	private  $time_list = array();
	
	//持续运行脚本
	public function onTimer($time,$funcName){
		return swoole_timer_tick($time,$funcName);
	}
	//运行脚本，多少秒后
	public function  onTimerAfter($time,$funcName,$params){
		swoole_timer_after($time,$funcName,$params);
	}
	//取消定时程序
	public function onCancel($timerId){
		swoole_timer_clear($timerId);
	}
	//loop跳出，在下次循环之前执行
	public function onDefer($funcName){
		swoole_event_defer($funcName);
	}
	//启动方法
	public function run(){
		foreach (TimerConfig::$task_list as $k=>$v){
			$time_list[$k] = $this->onTimer($v["time"], $v["func"]);
		}
	}
	
	public function getTimeList(){
		return $this->time_list;
	}
}














