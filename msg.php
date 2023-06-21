<?php

require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;
// dotenv
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Set your app credentials
$apiKey= 'aee6374c438533bfec60bf57830de878ccef94d596c6203b6c76dd1dfd47a52b';
$username='samtech';

// Initialize the SDK
$AT         = new AfricasTalking($username, $apiKey);

// Get the SMS service
$sms        = $AT->sms();

// Set the numbers you want to send to in international format
$recipients = "+254758206444";

// Set your message
$message    = "I'm a lumberjack and its ok, I sleep all night and I work all day";

// Set your shortCode or senderId
$from       = "SQAMTECH";

try {
    // Thats it, hit send and we'll take care of the rest
    $result = $sms->send([
        'to'      => $recipients,
        'message' => $message,
        'from'    => $from
    ]);

    print_r($result);
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}

