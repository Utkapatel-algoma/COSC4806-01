<?php

$valid_username = "utkarsh";
$valid_password = "password";

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($valid_username == $username && $valid_password == $password) {
    echo "Success";
} else {
  echo "Fail";
}

?>