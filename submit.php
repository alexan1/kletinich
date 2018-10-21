<?php
//header( "Location: confirm.html");
$name=$_POST["name"];
//echo $name;
$email=$_POST["email"];
//echo $email;
$phone=$_POST["phone"];
//echo $phone;
$subject=$_POST["reason"];
//echo $reason;
$other=$_POST["other"];
//echo $other;
//$to = "alex@alexsolution.com";
$to = "boris@kletinich.com";
$body = "Name:  ".$name ."\nEmail: ".$email ."\nPhone: " .$phone ."\nText: ". $other;
//$body ="Fuck";
//echo $body;
//header( "Location: confirm.html" );

if (mail($to, $subject, $body))
{
   //echo("<p aligh="center">Thank you for contacting me</p>");
   header( "Location: confirm.html" );
}
else
{
   //echo("<p aligh="center">Message delivery failed...</p>");
   header( "Location: noconfirm.html" );
}

?> 

