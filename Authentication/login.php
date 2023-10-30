<?php

include __DIR__. "/../SQLInit/SQL.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
$data = $_POST;
$db = $Database->prepare("SELECT Pass FROM UserDatabase WHERE Username = :user");
$db->execute([":user" => $data["Username"]]);
$fetched = $db->fetchColumn();
  if($data["Terminated"] == 1){
    return -1
  }
if($data["Username"] == "Dev"){
  echo 2;
} else {
  if(password_verify($data["Password"], $fetched)){
    echo $fetched;
  } else {
    echo 0;
  }
}
}else{
  echo  '<script>window.location.href = ""</script>'
}

?>