<?php

require "vendor/autoload.php";

$access_token = 'xxxxxxxxx';

$channelSecret = 'xxxxxxxxx';

$pushID = 'xxxxxxxxx'; // my ID line

$pushID = $_GET['pushID'];
$ans_text = "บัญชีของท่านได้รับการยืนยันเรียบร้อยแล้ว";


$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder(' '.$ans_text);
$response = $bot->pushMessage($pushID, $textMessageBuilder);


echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







