<?php 
include __DIR__ . "/SQLInit/SQL.php";
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

  <h1>me when someone found this</h1>
  <?php
    $q1 = $Database->prepare("SELECT count(*) FROM `UserDatabase`");
    $q1->execute();
    $count1 = $q1->fetchColumn();
    $q2 = $Database->prepare("SELECT count(*) FROM `UserDatabase` WHERE `AdminLevel` >= 1");
    $q2->execute();
    $count2 = $q2->fetchColumn();
    echo (string)$count1 . " Registered accounts";
?>
<br>
  <?php
    echo (string)$count2 . " Registered moderators";
  ?>
</html>