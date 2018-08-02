<?php



require "vendor/autoload.php";

$access_token = 'w7OSzcVAOpRganNEYIoxpcExP4uUvI797m8Nd+v+hHa+BDgB4dGJJOTvaMruu57KS5vdBSg6ROCpMkffWAb/NzazBWhuEXoi4TgAKy/3fDHMlSdBOSmIJU74l1EB/WgLp4rlIGZ5L8Cqy+K+zfRJpQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '68c8ac7c490086db5cc65135ced4908b';

$pushID = 'Uacc735178303bcaeef074a2ea00c5840';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







