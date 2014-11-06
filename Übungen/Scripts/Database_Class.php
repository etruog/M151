<?php
define( 'DBSRV', 'localhost' );  
define( 'DBLOGIN', 'root' );  
define( 'DBPW', '' );  
define( 'DBNAME', 'myDB' );  

class DBHandler
{
	public $connection = NULL;
	public $results = NULL;
	private $sqlStr = NULL;
	
	public function _construct()
	{
		$this->connection();
	}
	
	public static function connection()
	{
		$this->connection = new mysqli(DBSRV, DBLOGIN, DBPW, DBNAME);
		if($this->connection->connect_errno)
		{
			echo "Database doesn't exist. Creating Database...";
			$this->createDB;
		}
	}
	
	private function createDB()
	{
		$this->connection = new mysqli(DBSRV, DBLOGIN, DBPW);
		$this->sqlStr = "CREATE DATABASE IF NOT EXISTS " . DBNAME;
		$this->connection->query($this->sqlStr);
		$this->connection->select_db(DBNAME);
	}
	
	
	
	
	
	
	
	
	
}
?>