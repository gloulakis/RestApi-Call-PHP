<?php
$headers = [
    "Content-Type: application/json",
    "Accept: application/json",
    "ApiKey: "

];

// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "https://test.com");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//curl_setopt($ch, CURLOPT_POST, true);
// grab URL and return content
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

//execute post
$result = curl_exec($ch);
echo $result;
// close cURL resource, and free up system resources
curl_close($ch);