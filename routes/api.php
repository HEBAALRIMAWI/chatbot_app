<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::get('/posts', 'BotManController@index');
    Route::get('/posts/{id}', 'BotManController@show');
    Route::post('/posts', 'BotManController@store');
    Route::put('/posts/{id}', 'BotManController@update');
    Route::delete('/posts/{id}', 'BotManController@destroy');
});



