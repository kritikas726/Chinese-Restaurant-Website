<?php
  session_start();
  $admin_name=$admin_password="";
  if(!isset($_POST['submit'])){
    $admin_name=$_POST['admin_name'];
    $admin_password=$_POST['admin_password'];
    if(($admin_name=="admin") && ($admin_password=="password"))
      {echo "Correct Credentials"; }  
    else
      { echo "Wrong Credentials";}  
  }
?>