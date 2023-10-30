<?php
  include __DIR__."/../Configuration/SQLServer.php";
  $Database = new PDO("mysql:host=$SQLHost;port=$SQLPort;dbname=$SQLDatabaseName", $SQLName, $SQLPassword)
?>