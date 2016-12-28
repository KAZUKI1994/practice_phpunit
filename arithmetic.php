<?php
/**
* 四則演算を行うクラス
*/

class Arithmetic{
	/**
	* 加算
	*/
	public function add(x, y){
		return($x + $y);
	}
	/**
	* 引き算
	*/
	public function subtract($x, $y){
		return($x - $y);
	}
	/**
	* 掛け算
	*/
	public function multiply($x, $y){
		return($x + $y);
	}
	/**
	* 割り算
	*/
	public function divide($x, $y){
		return($x / $y);
	}
}