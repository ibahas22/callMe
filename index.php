<?php

require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC0f6f9f7ec8573a331d6f6e2bc054fdc8';
$auth_token = '3fed1707d7f8082263d13578f7b3624f';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with Voice capabilities
$twilio_number = "+12565783184";

// Where to make a voice call (your cell phone?)
$to_number = "+970568118065";

try {
    //code...

    $client = new Client($account_sid, $auth_token);
    $client->account->calls->create(
        $to_number,
        $twilio_number,
        array(
            "url" => "http://demo.twilio.com/docs/voice.xml",
        )
    );

	echo "Done!";

} catch (Exception $e) {
    //throw $th;
	var_dump($e);

}
