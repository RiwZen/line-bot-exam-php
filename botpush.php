<?php



require "vendor/autoload.php";

$access_token = 'JhRIukA7CpaetJPRs31gQ/wFm+FWngaiGHA6B8YtwhMG5mHejk3nWLKrcLT796MLS5vdBSg6ROCpMkffWAb/NzazBWhuEXoi4TgAKy/3fDGq7ulJdPW5xNCaF6y5ZT+b1nxVJ70Q9ozN/ZaNSGabCQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '68c8ac7c490086db5cc65135ced4908b';

$pushID = 'Uacc735178303bcaeef074a2ea00c5840';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







