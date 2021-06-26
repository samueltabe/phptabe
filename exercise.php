<?php
 include 'include/head.php';
 include 'include/header.php';
?>

 <h1>Exercise</h1>

 <?php
 
 session_start();
 $_SESSION['name'] = "Ada";
 $_SESSION['age'] = 30;

 echo $_SESSION['name'];
 session_destroy();

 echo "Hello " .$_SESSION['name'];
?> 
