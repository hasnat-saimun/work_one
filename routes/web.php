<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo',[
    'uses' => 'UserController@viewPage',
    'as'   =>'viewPage'
]);
