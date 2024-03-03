<?php
   $servername = "localhost"; // Change this if your database is hosted elsewhere
   $username = "root"; // Change this to your MySQL username
   $password = ""; // Change this to your MySQL password
   $dbname = "portfolio4"; // Change this to the name of your database

   $conn = new mysqli($servername, $username, $password, $dbname);

   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   ?>