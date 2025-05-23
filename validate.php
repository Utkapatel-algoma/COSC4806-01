<?php

  session_start();

  $valid_username = "utkarsh";
  $valid_password = "password";

  $username = $_REQUEST['username'];
  $_SESSION['username'] = $username;
  $password = $_REQUEST['password'];

//checking if credentials provided are coorect or not
  if ($valid_username == $username && $valid_password == $password) {
    $_SESSION['authenticated'] = 1;
    header('Location: /'); //Pushed user to index.php after successful login
    exit(); // stopped script after this step.
  } else {

    if (!isset($_SESSION['failed_attempts'])){
      $_SESSION['failed_attempts'] = 1;
    } else {
      $_SESSION['failed_attempts'] += 1;
    }

    //Re-directed to login page now
    header('Location: /login.php');
    exit();// stopped script after this step.
  
  }

?>