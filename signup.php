<?php
$name = $['NAME'];
$email = $['EMAIL_ID'];


$conn = mysql_connect('localhost','root','');
if(!$conn){
    die('Connection Failed :'.mysql_error());
}
else{
    mysql_select_db("test",$conn);
    $stmt = $conn->prepare("insert into login(NAME, EMAIL_ID)
    values(?, ?, ?, ?, ?, ?,)");
    $stmt->blind_param("ss",$name, $email);
    $stmt->execute();
    echo "Successfully submitted..";
    $stmt->close();
    $stmt->close();
}
?>