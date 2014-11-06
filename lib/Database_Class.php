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
		$this->sqlstr = "CREATE TABLE IF NOT EXISTS  users 
                ( 
                uID int NOT NULL AUTO_INCREMENT, 
                PRIMARY KEY (uID), 
                loginname VARCHAR(15), 
                loginpass VARCHAR(100) 
                )"; 
      	$this->sqlStr = "INSERT INTO users 
                (loginname, loginpass) 
                VALUES 
                ('admin',  '1234')"; 
                $this->_con->query($sqlstr);
	}
	
	public function getData($sql)
	{
		$this->$results = $this->connection->query($sql);
	}
	
	
	
	
	
	
	
}
?>