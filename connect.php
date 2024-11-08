<?php

$host="sql107.infinityfree.com";
$user="if0_37673726";
$pass="mmotv1pAA40";
$db="if0_37673726_users";
$conn=new mysqli ($host,$user,$pass,$db);
if($conn->connect_error){
    echo "failed to connect DB" $conn->connect_error;
}

?>