<?php


// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "https://od-api-demo.oxforddictionaries.com:443/api/v1/entries/en/ace/definitions");
curl_setopt($ch, CURLOPT_HEADER, 0);

$headers = array(
    'Accept: application/json', 
    'app_id: 5037d509', 
    'app_key: 4dc1aebaa63721f0f8e79a55e2514bc7', 
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// grab URL and pass it to the browser
curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);

?>

<b>Message Sent</b>


