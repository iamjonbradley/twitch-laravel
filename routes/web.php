<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscordNotification;
use App\Http\Controllers\TwitchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notification', [DiscordNotification::class, 'notification']);
Route::get('/twitch', [TwitchController::class, 'test']);

Route::get('/greeting', function () {
    return 'Hello World';
});
