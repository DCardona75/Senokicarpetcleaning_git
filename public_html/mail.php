<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "from:".$name."<".$email.">\r\n";

$recipient = "senokicleans@gmail.com";

$mail($recipient,$message,$mailheader) or die("Error");

echo"Message sent";


?>