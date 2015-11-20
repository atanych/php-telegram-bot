<?php
//Composer Loader
$loader = require __DIR__.'/vendor/autoload.php';

$API_KEY = 'your_bot_api_key';
$BOT_NAME = 'namebot';

$link = 'https://yourdomain/yourpath_to_hook.php';
try {
//    $device = $this->getDevice($deviceId);
    new \Longman\TelegramBot\Telegram('145720770:AAHJuvqZFipNQr4rE3tuoWI3e_GjwaN1rq8');
    $result = \Longman\TelegramBot\Request::getUserProfilePhotos([
        'user_id' => '145720770',
        'limit'   => 1
    ]);
    print_r($result->getResult()->getPhotos()); exit;

    // create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);
    // set webhook
    $result = $telegram->setWebHook($link);
    //Uncomment to use certificate
    //$result = $telegram->setWebHook($link, $path_certificate);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}
