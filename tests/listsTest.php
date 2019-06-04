<?php

require('src/Ilists.php');
require('src/lists.php');

class listsTest extends PHPUnit\Framework\TestCase {

	public function testFoldl() {
		$a = new \kdaviesnz\utilities\lists([1,2,3,4]);
		$result = $a->foldl(function($carry, $item){
			return $carry + $item;
		});
		$this->assertTrue($result=== 10, print_r($result,1));
	}

	public function testFoldr() {
		$a = new \kdaviesnz\utilities\lists([1,2,3,4]);
		$result = $a->foldr(function($carry, $item){
			return $carry - $item;
		});
		$this->assertTrue($result=== -10, print_r($result,1));
	}

	public function testFilter() {
		$a = new \kdaviesnz\utilities\lists([1,2,3,4]);
		$result = $a->filter(function($item){
			return $item !==2;
		});
		$r = $result();
		$this->assertTrue($r==[0=>1,2=>3,3=>4], print_r($r,1));
	}

	public function testMap() {
		$a = new \kdaviesnz\utilities\lists([1,2,3,4]);
		$result = $a->map(function($item){
			return $item *2;
		});
		$r = $result();
		$this->assertTrue($r===[2,4,6,8], print_r($r,1));
	}

	public function testFilterMap() {
		$a = new \kdaviesnz\utilities\lists([1,2,3,4]);
		$result = $a->filter(function($item){
			return $item !==2;
		})->map(function($item){
			return $item *2;
		});
		$r = $result();
		$this->assertTrue($r===[0=>2,2=>6,3=>8], print_r($r,1));
	}
}
