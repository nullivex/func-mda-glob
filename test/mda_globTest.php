<?php
require_once(dirname(__DIR__).'/vendor/autoload.php');
require('boot.php');
ld('/func/mda_glob');

class FuncMDAGlobTest extends PHPUNIT_Framework_TestCase {

	public function testGet(){
		$_GET['test'] = true;
		$this->assertTrue(get('test'));
	}

	public function testPost(){
		$_POST['test'] = true;
		$this->assertTrue(post('test'));
	}

	public function testReq(){
		$_REQUEST['test'] = true;
		$this->assertTrue(req('test'));
	}

	public function testServer(){
		$_SERVER['test'] = true;
		$this->assertTrue(server('test'));
	}

	public function testSession(){
		$_SESSION['test'] = true;
		$this->assertTrue(session('test'));
		$this->assertTrue(session_delete('test'));
		$this->assertTrue(session('test',true));
		$this->assertTrue(session('test'));
		session_delete('test');
	}

}
