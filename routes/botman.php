<?php
use App\Http\Controllers\BotManController;
use Illuminate\Support\Facades\Route;
use Illuminate\views\welcome;
use App\Http\Controllers\chat;

$botman = resolve('botman');
$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});

$botman->hears('what is your name?', function ($bot) {
    $bot->reply('my name is alternative chatbot!');
});

$botman->hears('age?', function ($bot) {
    $bot->reply('21');
});

$botman->fallback(function($bot) {
    $bot->reply('Sorry, I did not understand these commands. Here is a list of commands I understand: ...');
});
