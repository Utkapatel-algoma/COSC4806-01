<?php
session_start();

//pushing user to index.php if already authenticated
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == 1) {
  header('Location: /');
  exit(); // stopped script after this step.
  
}
?>





<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>
  
  <body>
    
    <h1>Login form</h1>

    <form action="/validate.php" method="post"
      <label for="username">Username:</label>
      <br>
      <input type="text" id="username" name="username">
      <br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password">
      <br><br>
      <input type="submit" value="Submit">
    </form>
   
  </body>
</html>






