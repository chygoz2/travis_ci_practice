<?php

	class DatabaseTest extends PHPUnit_Framework_TestCase
	// class DatabaseTest
    {
        private $conn = null;
        private $database;
    
        public function setUp()
        {
		    if(!file_exists("../db.php")){
				$this->conn = null;
				return;
			}

			$fcontents = htmlentities(file_get_contents("../db.php"));
			//check if file contains "../config.php";

			$contains = stripos($fcontent, "config.php");
			if($contains !== false){
				require_once "../db.php";
				$this->conn = $conn;
				$this->database = DB_DATABASE;
			}else{
				$conn = null;
			}
        }
    
        protected function tearDown()
        {
            
        }
    
        public function testIfConnObjectIsSet()
        {
        	// $this->assertNotNull($this->conn);
        	$this->assertEquals($this->database, "hng");
        }
    
    }

?>