<?php
//get data from form  

$name = $_POST['Name'];
$email= $_POST['EmailId'];
$subject=$_POST['Subject'];
$message= $_POST['Message'];
$to = "harshkingkushwah@gmail.com";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Subject =" . $subject;
$headers = "From: noreply@sanyamjain.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>