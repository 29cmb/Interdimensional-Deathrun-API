<?php 
  include __DIR__ . '/../SQLInit/SQL.php';
  $data = $_POST;
  if($data["username"] != ""){
    if($data["password"] != ""){
      $q3 = $Database->prepare("SELECT COUNT(1) FROM UserDatabase WHERE Username=:user");
      $q3->execute([":user" => $data["username"]]);
      if($q3->fetchColumn() == 0){
          $hash = password_hash($data["password"], PASSWORD_DEFAULT); 
          $q = $Database->prepare("INSERT INTO UserDatabase (PlayerID, Username, Pass, AdminLevel) VALUES (:id, :username, :pass, :admin)");
          $q2 = $Database->prepare("SELECT count(*) FROM `UserDatabase`");
          $q2->execute();
          $q->execute([":id" => ($q2->fetchColumn() + 1), ":username" => $data['username'], ":pass" => $hash, ":admin" => 0]);
          header("Location: success.php");
      } else {
        header("Location: failed.php");
      }
      
    
    }
  }
  
?>
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

  <h1>Signup</h1>
   <form method="post" name="Signup" action="/Signup/index.php">
      <p>Username:<p><input type="text" name="username" placeholder="Username"></input>
      <p>Password:<p><input type="password" name="password" placeholder="Password"></input>
      <br>
      <input type="submit" id="create" value="Create your account"></submit>
   </form>
</html>