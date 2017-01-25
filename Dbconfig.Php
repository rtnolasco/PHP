/*
Set the credentials for the database and make a new PDO connection if the connection fails display the error . 
Next include the ‘class.crud.php’ file and make an instance of it, pass in the database object to the class 
to make use of the database.
/*

<?php

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "dbpdo";


try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 echo $e->getMessage();
}

include_once 'class.crud.php';

$crud = new crud($DB_con);

?>
