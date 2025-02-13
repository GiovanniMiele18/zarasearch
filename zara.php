<?php

// get cURL resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, 'https://app.scrapingbee.com/api/v1?api_key=XJE0613P1RFPQ0SIHXFLLYZ3S545Q2PHPAFMXOCW6YGZ7T3MAMOK9PBQSVS0LJHYPY2NHQ4ZJUTXSES6&url=https%3A%2F%2Fwww.zara.com%2Fit%2Fit%2Fpullover-con-bottoni-spalle-p03920135.html%3Fv1%3D424938363%26ajax%3Dtrue');

// set method
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

// return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// send the request and save response to $response
$response = curl_exec($ch);

// stop if fails
if (!$response) {
  die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
}

echo 'HTTP Status Code: ' . curl_getinfo($ch, CURLINFO_HTTP_CODE) . PHP_EOL;
echo 'Response Body: ' . $response . PHP_EOL;

// close curl resource to free up system resources
curl_close($ch);

?>
