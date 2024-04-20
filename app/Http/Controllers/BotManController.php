<?php
namespace App\Http\Controllers;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
   
class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
   
        $botman->hears('{message}', function($botman, $message) {
   
            if ($message == 'hi') {
                $this->askName($botman);
            }
            
            else{
                $botman->reply("Start a conversation by saying hi.");
            }
   
        });

        // Add fallback logic here
        $botman->fallback(function ($botman) {
            $botman->reply('Sorry, I did not understand these commands. Here is a list of commands I understand: ...');
        });
   
        $botman->listen();
    }


   
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
   
            $name = $answer->getText();
   
            $this->say('Nice to meet you '.$name);
        });
    }

    //     public function startConversation(BotMan $bot)
    // {
    //     $bot->startConversation(new ExampleConversation());
    // }

}


