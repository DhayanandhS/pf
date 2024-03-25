<?php

$email = $_POST['name'];
$message = $_POST['message'];

$mailheader ="From:".$name."<".$email.">\r\n";

$recipient = "dhayanandhs2003@gmail.com";

mail($recipient, $message, $mailheader)
or die("Error!");

echo"Message send!";


