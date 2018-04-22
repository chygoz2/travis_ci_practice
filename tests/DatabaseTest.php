<?php

	class DatabaseTest extends PHPUnit_Framework_TestCase
	// class DatabaseTest
    {  
        public function testIfConnObjectIsSet()
        {
        	$file_exists = file_exists("db.php");
        	$this->assertTrue($file_exists);

			$fcontents = htmlentities(file_get_contents("db.php"));
			//check if file contains "../config.php";
			$contains = stripos($fcontents, "../config.php");

			$this->assertTrue($contains !== false);
			
			if($contains !== false){
				require "db.php";
				$this->assertNotNull($conn);
			}
        }

    }

?>