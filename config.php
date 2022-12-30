<?php
   $hostname ="sql205.epizy.com";
   $username = "epiz_33288314";
   $password = "FMwl8DCQFWofbE";
   $database = "epiz_33288314_HilzonHeisha";
   
   $conn = mysqli_connect($hostname, $username, $password, $database);

   if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
   }
 ?>