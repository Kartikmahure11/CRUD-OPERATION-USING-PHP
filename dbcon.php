<?php


 define("HOSTNAME", "localhost:3307");
 define("USERNAME", "root");
 define("PASSWORD", "kartik");
 define("DATABASE", "crud_operation");


 $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

 if(!$connection)
 {
    die("Connection Failed");
 }
 


?>