<?php
session_start();

//Check if user is authenticate
//if NOT, send them to login.php... header()...
?>



<!DOCTYPE html>
<html>
  <head>
    <title>Utkarsh</title>
  </head>
  <body>
    <h1>Assignment 1</h1>

    <p> Welcome, <?=$_SESSION['username'] ?></p>
    
   
  </body>

  <footer>
    <p><a href="/logout.php">Click here to logout</a></p>
  </footer>  
</html>
