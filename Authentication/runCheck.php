<?php 
include __DIR__. "/../SQLInit/SQL.php";
if($_SERVER['REQUEST_METHOD'] === 'POST'){
$data = $_POST;
$db = $Database->prepare("SELECT Pass FROM UserDatabase WHERE Username = :user");
$db->execute([":user" => $data["Username"]]);
$fetched = $db->fetchColumn();
if($_POST['Username'] == "Dev"){
  echo 2;
} else {
  if($data["Password"] == $fetched){
    echo 1;
  } else {
    echo 0;
  }
}
} else {
  return http_response_code(403);
}

?>