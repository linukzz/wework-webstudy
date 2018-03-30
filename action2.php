<?php
$name = $_POST['user_name'];
$password = $_POST['user_password'];

echo "ID : ".$name."<br>";
echo "PASSWPRD : ".$password."<br>";

echo hash('sha256', $password);
?>