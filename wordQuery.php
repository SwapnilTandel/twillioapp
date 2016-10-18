<?php


// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "https://od-api.oxforddictionaries.com:443/api/v1/entries/en/adondan/definitions");
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
$array = json_decode( $json, true );
var_dump($array);

$array=$array['results'];
$array=$array[0];
$array=$array["lexicalEntries"];
$array=$array[0];
$array=$array["entries"];
$array=$array[0];
$array=$array["senses"];

echo count($array);
foreach ($array as $item){
//    var_dump($item);
    echo "<br>------------------------------------<br>";
    $tmp = $item["definitions"];
    echo $tmp[0];
    echo "<br>+++++++++++++++++++++++++++++++++++>";
}

// close cURL resource, and free up system resources
curl_close($ch);


//var_dump(json_decode($json));
//var_dump(json_decode($json, true));





?>

<b>Message Sent</b>




