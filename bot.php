<?php
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('W5b6+6G5LSrSSdceLywdyXBxJJkMblfAtmTzQXPvzmx31jtc75WYnglsAEQyfa5m+yZDHBYBb8ZJFlx6mpE052KqMKEAREJIrUVb/RtI3A1+YdkMBROgwcP2Bg13kGaxF3BUlnd6AT8m76Z7CDkHCgdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['beca049c4ff65cbfde572cd096c1a7fe
' => 'beca049c4ff65cbfde572cd096c1a7fe
']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->replyMessage('W5b6+6G5LSrSSdceLywdyXBxJJkMblfAtmTzQXPvzmx31jtc75WYnglsAEQyfa5m+yZDHBYBb8ZJFlx6mpE052KqMKEAREJIrUVb/RtI3A1+YdkMBROgwcP2Bg13kGaxF3BUlnd6AT8m76Z7CDkHCgdB04t89/1O/w1cDnyilFU=', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
?>
