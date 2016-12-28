<?php
require_once 'Arithmetic.php';
class ArithmeticTest extends PHPUnit_Framework_TestCase{
	/**
	* @var Arithmetic
	*/
	protected $object;

	/**
	* setUpは各テストメソッドが実行する前に実行する
	*/
	protected function setUp(){
		// テストするオブジェクトを生成する
		$this->object = new Arithmetic();
	}

	/**
	* 足し算関数の検証
	*/
	public function testAdd(){
		$this->assertEquals(8, $this->object->add(3,5));
		$this->assertEquals(45, $this->object->add(15,30));
	}

	/**
	* 引き算関数の検証
	*/
	public function testSubtract(){
		$this->assertEquals(7, $this->object->subtract(10,3));
		$this->assertEquals(-6, $this->object->subtract(3, 9));
	}

	/**
	* 掛け算関数の検証
	*/
	public function testMultiply(){
		$this->assertEquals(24, $this->object->multiply(4,6));
		$this->assertEquals(-20, $this->object->multiply(5, -4));
	}

	/**
	* 割り算関数の検証
	*/
	public function testDivide(){
		$this->assertEquals(3, $this->object->divide(6,2));
		$this->assertEquals(1, $this->object->divide(6,6));
	}
}