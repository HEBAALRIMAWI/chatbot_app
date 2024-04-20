<?php

use Illuminate\Support\Facades\Route;
use Illuminate\views\welcome;
//use Illuminate\views\chat;
use App\Http\Controllers\BotManController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);
//Route::match(['get', 'post'],'/botman/chat', [BotManController::class, 'handleChat']);
//>>>Route::post('/botman/chat', [BotManController::class, 'handleChat']);

