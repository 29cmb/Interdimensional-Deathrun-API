<!DOCTYPE html>
<html>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@700&display=swap');
    * {
      align-items:center;
      text-align:center;
      font-family: 'Source Sans Pro', sans-serif;
    }
  </style>

  <h1>Login</h1>
   <form method="post" name="Login" action="/Signup/index.php">
      <p>Username:<p><input type="text" name="username" placeholder="Username"></input>
      <p>Password:<p><input type="password" name="password" placeholder="Password"></input>
      <br>
      <input type="submit" id="create" value="Login"></submit>
   </form>
  <p>Subtext</p>
</html>
<?php
  include __DIR__ . '/../SQLInit/SQL.php';
  $data = $_POST;
  if($_POST["username"] != ""){
    if($_POST["password"] != ""){
      $hash = password_hash($data["password"], PASSWORD_DEFAULT); 
      echo $hash;
    }
  }
  
?>