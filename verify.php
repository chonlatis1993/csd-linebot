<?php
$access_token = 'W5b6+6G5LSrSSdceLywdyXBxJJkMblfAtmTzQXPvzmx31jtc75WYnglsAEQyfa5m+yZDHBYBb8ZJFlx6mpE052KqMKEAREJIrUVb/RtI3A1+YdkMBROgwcP2Bg13kGaxF3BUlnd6AT8m76Z7CDkHCgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
>
