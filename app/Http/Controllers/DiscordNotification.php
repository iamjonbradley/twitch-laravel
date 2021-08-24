<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DiscordNotification extends Controller
{
    public function notification()
    {
        return Http::post('https://discord.com/api/webhooks/877400351622438933/aUqgHgKM3JCl8FoTaK01-Fbe6Dk71SC0VbASu3Qix99L4YtjMdJ1fbGangtjSCtK49vw', [
            'content' => "Learning how to send notifications with DevDojo.com!",
            'embeds' => [
                [
                    'title' => "An awesome new notification!",
                    'description' => "Discord Webhooks are great!",
                    'color' => '7506394',
                ]
            ],
        ]);

    }
}
