<?php

use Illuminate\Support\Facades\Route;

Route::get('/navigation', [
    'middleware' => ['xss', 'https'],
    'uses' => 'App\Http\Controllers\NavigationController@navigation'
]);
