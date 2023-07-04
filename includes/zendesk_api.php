<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://minigrp.zendesk.com/api/v2/users.json',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic ZGVubmlzLndhd2VydUB0ZWFtMTFkZWdyZWVzLmNvbTpTaCFoM20x',
    'Cookie: __cfruid=077ad115d67755c33e574dc639720b6dd0a57a6a-1688405877; _zendesk_cookie=BAhJIhl7ImRldmljZV90b2tlbnMiOnt9fQY6BkVU--0bf2100788cb010d0183feca16aaf88ccaf719ca'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
// echo $response;
?>