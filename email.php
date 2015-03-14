<?php
$contact_name=$_POST['contact_name'];
$contact_email=$_POST['contact_email'];
$contact_phone=$_POST['contact_phone'];
$contact_message=$_POST['contact_message'];
$to_email = 'xxx@domain.com'; //you can give email id to whom you need to send
$html = 'your custom body of the mail';
$subject = 'you subject' . $contact_message;
$message = $html;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: ABC' . "\r\n"; //DONT GIVE SPACE IN "ABC"  //you can replace your value but no space.. if u give space you can get email in spam only..
$response = mail($to_email,$subject,$message,$headers);
if($response)
{
	echo "Mail sent";
}
else
{
	echo "Not sent.. Try later";
}
?>
