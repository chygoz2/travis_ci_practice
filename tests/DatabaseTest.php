<?php

	class DatabaseTest extends PHPUnit_Framework_TestCase
	// class DatabaseTest
    {
        public $conn;
        public $database;
    
        public function setUp()
        {
		    if(!file_exists("../db.php")){
				$this->conn = null;
				return;
			}

			$fcontents = htmlentities(file_get_contents("../db.php"));
			//check if file contains "../config.php";

			$contains = stripos($fcontents, "config.php");
			if($contains !== false){
				require "../db.php";
				$this->conn = $conn;
				$this->database = DB_DATABASE;
			}
        }
    
        public function tearDown()
        {
            
        }
    
        public function testIfConnObjectIsSet()
        {
        	$this->assertNotNull($this->conn);
        }

        public function testDatabaseNameIsCorrect()
        {
        	$this->assertEquals($this->database, "hng");
        }
    
    }

    // $c = new DatabaseTest();
    // $c->setUp();
    // echo $c->database;

?>