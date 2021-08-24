<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use romanzipp\Twitch\Twitch;

class twitchController extends Controller
{
    public function test()
    {
        $twitch = new Twitch;

        $twitch->setClientId('w63vey3azz1brxcrcr9f0wi62wgmy1');
        $twitch->setClientSecret('7l2kwlbnnkh0g2tf87l7bacdqxrz9o');


        $firstResult = $twitch->getStreams(['language' => 'en']);

        dd($firstResult->shift());

        // Get User by Username
        $result = $twitch->getUsers(['login' => 'carthanx']);

        // dd($result);

        // Check, if the query was successful
        if (!$result->success()) {
            return null;
        }

        // Shift result to get single user data
        $user = $result->shift();


        $followers = $twitch->getUsersFollows(['to_id' => $user->id]);

        dd($followers->shift());

        return $user->id;
    }
}
