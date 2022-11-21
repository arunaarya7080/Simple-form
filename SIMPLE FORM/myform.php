<?php
if(isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$service = $_POST['service'];
$message = $_POST['message'];

$from       = "From Prontosys It Services";
$webmaster  = "arun.kumar@prontosys.com"; //It's web master mail info@example.com
$to         = "arun.kumar@prontosys.com"; // where you want to get mail 
$subject    = "Ads Online Lead Prontosys It Services";

$headers    = "From: " . $from . "<" . $webmaster . ">\r\n";
$headers    .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers    .= "MIME-Version: 1.0" . "\r\n";
$headers    .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<html><body>";
$message .= "<p>Name :".$_POST['name']  ."</p>";
$message .= "<p>Email : ". $_POST['email'] ."</p>";
$message .= "<p>Phone : ". $_POST['number'] ."</p>";
$message .= "<p>Service : ". $_POST['service'] ."</p>";
$message .= "<p>Message :".$_POST['message']."</p>";
$message .= "</body></html>";

$sendmail = mail($to, $subject, $message, $headers);
}

echo "<script>alert('Thank you for contact us, our team will contact with you very soon');document.location='https://prontosys.ae/'</script>";

?>



<?php

if(isset($_POST['submit'])) {
//Input value 
$name = $_POST['name'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];

// Message Body
$message_body = "<html><body>";
$message_body .= "
<table>
  <tr>
    <th>Name : </th>
    <td>$name</td>
  </tr>
   <tr>
    <th>Email : </th>
    <td>$email</td>
  </tr>
  <tr>
    <th>Mobile No. : </th>
    <td>$mobileno</td>
  </tr>
</table>
";
$message_body .= "</body></html>";
    
//mailer info 
$from_text = "From Email";
$from_email = "arundeltait@gmail.com";
$to = "arundeltait@gmail.com";
$subject = "Online Lead Form";

// Email Header Part 
$headers  = "From: " . $from_text . "<" . $from_email . ">\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$sendmail = mail($to,$subject,$message_body,$headers);
 
 if($sendmail){
		echo "Mail send";
	}else{
		echo "Error occur";
	}
 
}


?>
