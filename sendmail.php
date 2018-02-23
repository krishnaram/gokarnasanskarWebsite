<?php
// multiple recipients
$to  = $_POST['email'] ; // note the comma
// subject
$subject = 'Your Booking for Pooja';
//cost
$cost = $_POST['price'];
if($_POST['nop'] >4)
{
	$date1 = new DateTime($_POST['from']);
	$date2 = new DateTime($_POST['to']);
	$interval = 0;
	echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 
	$extraPerson = $_POST['nop']-4;
	$cost = $extraPerson*250*$interval->d;
	$cost = $_POST['price']+$cost;
}

// message
$message = '
<html>
<head>
  <title>'.$_POST['prc'].' Pooja</title>
</head>
<body>
	<p>Hi '.$_POST['fname'].' '.$_POST['lname'].' ,</p>
	<br/>
  <p>Details of <b>'.$_POST['prc'].'</b> Booked:</p>
  <table border="2px" align="center">
    <tr>
      <th align="center">Number Of People Coming</th><th align="center">From Date</th><th align="center">To Date</th><th align="center">Contact Number Given</th>
    </tr>
    <tr>
      <td align="center">'.$_POST['nop'].'</td><td align="center">'.$_POST['from'].'</td><td align="center">'.$_POST['to'].'</td><td align="center">'.$_POST['phone'].'</td>
    </tr>
    
  </table>
  <p>You can choose type of accomodation after reaching Gokarna.<br/>
  Food/Diet will be served according to custom of Seva/Pooja you are doing.</p>
  <h2>Your Message to us</h2>
  <p>'.$_POST['message'].'</p>
  <p>Note: Per day 250rs extra for each person if Expected people coming are more than 4.<br/>
  		   Accomodation will be charged extra.</p>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'From: Admin<admin@gokarnasanskara.com>' . "\r\n";
$headers .= 'Bcc: krishna30ram@gmail.com,gokarnasanskara@gmail.com,shridharupadya@gmail.com' . "\r\n";
$headers .= 'Cc: shridharupadya@gmail.com' . "\r\n";
$headers .= "Reply-To: admin@gokarnasanskara.com" . "\r\n" ;
$headers .= "X-Mailer: PHP/" . phpversion(). "\r\n" ;
$headers .= "X-MSMail-Priority: High" ;

// Mail it
mail($to, $subject, $message, $headers);
 $url='http://www.gokarnasanskara.com/';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
?>