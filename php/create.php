<!-- Purpose: creates the database and table  -->
<?php
$servername = "localhost";
$username = "root";
$password = "";

//makes the database
try
{
  //Connect to the server/host on which the database is deployed.
  $conn = new PDO("mysql:host = $servername", $username, $password);
 
  //Set an attribute on the database handle
  //The attribute ATTR_ERRMODE (for Error reporting mode of PDO) is set to a value of ERRMODE_EXCEPTION (for Throws PDOExceptions).
  $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //Implement SQL statement to create database.
  $sql = "CREATE DATABASE leaderboard";

  //Execute SQL statement to create database; use exec() because no results are returned.
  $conn -> exec($sql);

  echo "<h1>Database created successfully!</h1>";
}

//error
catch(PDOException $e)
{
  echo "<h1>" . $e -> getMessage() . "</h1>";
}
$conn = null;


$dsn = "mysql:host=localhost;dbname=leaderboard";
$username = "root";
$password = "";

//makes the table for leaderboard
try
{
  //Connect to the database.

  $conn = new PDO($dsn, $username, $password);
 
  //Set an attribute on the database handle.
  //The attribute ATTR_ERRMODE (for Error reporting mode of PDO) is set to a value of ERRMODE_EXCEPTION (for Throws PDOExceptions).

  $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //Implement SQL statements to create various tables in database.
    $sqlStdTbl = "CREATE TABLE SCORES (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(20),
    Scores INT(20))";

  //Execute SQL statements to create various tables in database; use exec() because no results are returned.
  $conn -> exec($sqlStdTbl);
  echo "<h1>Table Scores created successfully!</h1>";
}

//error
catch(PDOException $e)
{
  echo "<h1>" . $e -> getMessage() . "</h1>";
}
$conn = null;
?> 