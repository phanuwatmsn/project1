<?php
Route::get('/testboot', function () {
    return view('boot');
});

Route::get('/testurl', function () {
    return url('test1');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello');
});
Route::resource('test', 'HelloController');
Route::resource('user', 'UserController');

Route::auth();

Route::get('/home', 'HomeController@index');
