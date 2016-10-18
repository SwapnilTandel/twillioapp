<?php

//https://demo.twilio.com/welcome/sms/reply/
/* Read the contents of the 'Body' field of the Request. */ 

$body = $_REQUEST['Body']; 

/* Remove formatting from $body until it is just lowercase characters without punctuation or spaces. */ 

$result = preg_replace("/[^A-Za-z0-9]/u", " ", $body); 
$result = trim($result); 
$result = strtolower($result); 

echo "<Response><Sms>Thanks for the message. Configure your number's SMS URL to change this message.Reply HELP for help. Swapnil Tandel.</Sms></Response>";

?>