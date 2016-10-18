<?php


// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "https://od-api.oxforddictionaries.com:443/api/v1/entries/en/ace/definitions");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = array(
    'Accept: application/json', 
    'app_id: 2f9369ef', 
    'app_key: 239fe13344224db094aed90819920cc1', 
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// grab URL and pass it to the browser
$json = curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);


var_dump(json_decode($json));
var_dump(json_decode($json, true));

?>

<b>Message Sent</b>


