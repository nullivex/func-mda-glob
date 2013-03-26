<?php
/**
 *  OpenLSS - Lighter Smarter Simpler
 *
 *	This file is part of OpenLSS.
 *
 *	OpenLSS is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Lesser General Public License as
 *	published by the Free Software Foundation, either version 3 of
 *	the License, or (at your option) any later version.
 *
 *	OpenLSS is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Lesser General Public License for more details.
 *
 *	You should have received a copy of the 
 *	GNU Lesser General Public License along with OpenLSS.
 *	If not, see <http://www.gnu.org/licenses/>.
*/
require_once(dirname(__DIR__).'/vendor/autoload.php');
require('lss_boot.php');

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
