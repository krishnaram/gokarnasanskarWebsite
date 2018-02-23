<?php
// multiple recipients
$data = json_decode(file_get_contents('php://input'), true);
$to  = $data['email'] ; // note the comma
// subject
$subject = 'Your Contact Details';
//cost
/*$cost = $_POST['price'];
if($_POST['nop'] >4)
{
	$date1 = new DateTime($_POST['from']);
	$date2 = new DateTime($_POST['to']);
	$interval = $date1->diff($date2);
	echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 
	$extraPerson = $_POST['nop']-4;
	$cost = $extraPerson*200*$interval->d;
	$cost = $_POST['price']+$cost;
}*/

// message
$message = '
<html>
<head>
 
</head>
<body>
	<p>Namaskar,  '.$data['name'].'</p>
	<br/>
  
  
  <h2>Your Message to us</h2>
  <p>'.$data['message'].'</p>
 <br/>
 <br/>
 <p>Contact number given : '.$data['phone'].'</p><br/>
<p>We will reach you in Sometime.</p>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'Subject: Contact Mail' . "\r\n";

// Additional headers
$headers .= 'From: Admin<admin@gokarnasanskara.com>' . "\r\n";
$headers .= 'Bcc: krishna30ram@gmail.com,gokarnasanskara@gmail.com' . "\r\n";
$headers .= "Reply-To: admin@gokarnasanskara.com" . "\r\n" ;
$headers .= "X-Mailer: PHP/" . phpversion(). "\r\n" ;
$headers .= "X-MSMail-Priority: High" ;

// Mail it
mail($to, $subject, $message, $headers);
?>