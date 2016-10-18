<?php
$body = $_REQUEST['Body']; 
$result = preg_replace("/[^A-Za-z0-9]/u", " ", $body); 
$result = trim($result); 
$result = strtolower($result); 

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://od-api.oxforddictionaries.com:443/api/v1/entries/en/".$result."/definitions");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = array(
    'Accept: application/json', 
    'app_id: 2f9369ef', 
    'app_key: 239fe13344224db094aed90819920cc1', 
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$json = curl_exec($ch);

if($json === NULL){
    echo "<Response><Sms>Word Not Found. Sorry :(</Sms></Response>";
}else{
$array = json_decode( $json, true );

$array=$array['results'];
$array=$array[0];
$array=$array["lexicalEntries"];
$array=$array[0];
$array=$array["entries"];
$array=$array[0];
$array=$array["senses"];

    $push="";
    $a .= " Jhon!";
    
foreach ($array as $item){
    $tmp = $item["definitions"];
    $push .= ucfirst($tmp[0]);
    $push .=". ";
}
echo "<Response><Sms>".$push."</Sms></Response>";
    
}
curl_close($ch);
?>