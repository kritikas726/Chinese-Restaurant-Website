<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chinese-restaurant-website";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // $C_Single_Category_Type="";
    // if(!isset($_POST['submit'])){
    //   $C_Single_Category_Type=$_POST["DESSERTS"];  
    // }
