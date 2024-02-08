<?php

namespace App\Http\Controllers\sms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SmsController extends Controller
{
    // public function sendsms(){


    //     $sid     = getenv("TWILTO_SID");
    //     $token   = getenv("TWILTO_TOKEN");
    //     $number  = getenv("TWILTO_PHONE");
    //     $twilio  = new Client($sid, $token);

    //     $message = $twilio->messages
    //               ->create("+20 10 06257353", // to
    //                        [
    //                            "body" => "This is the ship that made the Kessel Run in fourteen parsecs?",
    //                            "from" => "+20 10 06257353"
    //                        ]
    //                 );

    //     dd('message send success');

    // }


    public function send(Request $request){

        $number = $request->number;
        $message = $request->message;

        $basic  = new \Vonage\Client\Credentials\Basic("53748cae", "rWIT8HVgB1RVJO3h");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS($number, 'BRAND_NAME', $message)
        );
        dd('success');

    }
}
