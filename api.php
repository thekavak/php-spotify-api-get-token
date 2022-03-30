<?php

$curl = curl_init();

$public_key = "Your_Client_ID";
$private_key = "Your_Secret_Key";
$url = "https://accounts.spotify.com/api/token?grant_type=client_credentials";



curl_setopt_array($curl, array(
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_HTTPHEADER => array(
	"cache-control: no-cache",
	"content-type: application/x-www-form-urlencoded",
	"accept: *",
	"accept-encoding: gzip, deflate",
	"Content-Length: 0",
"Authorization: Basic ".base64_encode($public_key.":".$private_key)
),
));
$response = curl_exec($curl);
curl_close($curl);
//for all response
echo $response;

$array = json_decode($response, true);
//for only access token
echo $array['access_token'];
?>
