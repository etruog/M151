<?php 
$con = mysql_connect("localhost","root","");  
if (!$con) 
  { 
  die('Could not connect: ' . mysql_error()); 
  } 
  // erstellen einer db 
  if (mysql_query("CREATE DATABASE meineDB",$con)) 
  { 
      echo "Database created"; 
  }else { 
      echo "Error creating database: " . mysql_error(); 
  } 
//tabelle erstellen 
$sql = "CREATE TABLE IF NOT EXISTS Persons 
( 
personID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(personID), 
FirstName varchar(15), 
LastName varchar(15), 
Age int 
)"; 
mysql_select_db("meineDB", $con);   
mysql_query($sql,$con); 

//insert 
mysql_query("INSERT INTO Persons (FirstName, LastName, Age) 
VALUES ('Glenn', 'Quagmire', '33')"); 

//show 
$result = mysql_query("SELECT * FROM Persons"); 
echo '<pre>'; 
print_r(mysql_fetch_array($result)); 
echo '</pre>'; 
while($row = mysql_fetch_array($result)) 
  { 
  echo $row['FirstName'] . " " . $row['LastName']; 
  echo "<br />"; 
  } 


mysql_close($con); 
?>