<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC38f47be6a371df292e77daac000f95e6';
$token = '33be11d2938e582f13fdd565a03cd146';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+12674378296',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+1 906-553-4059',
        // the body of the text message you'd like to send
        'body' => "Hello from Swapnil Tandel"
    )
);
?>

<b>Message Sent</b>


