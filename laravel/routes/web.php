<?php

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

Route::get('/hello', function () {
	return "Hi there";
});

Route::get('/token/{echostr?}', function ($echostr) {
	//return "qiango3107";
	//_GET["signature"];
    //_GET["timestamp"];
    //_GET["nonce"];
    //_GET["echostr"];

    print($echostr);
});
