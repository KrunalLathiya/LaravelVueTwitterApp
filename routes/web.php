<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('tweet/save', 'PostController@store');

Route::get('users/{user}', 'UserController@show')->name('user.show');

Route::get('users/{user}/follow', 'UserController@follow')->name('user.follow');

Route::get('users/{user}/unfollow', 'UserController@unfollow')->name('user.unfollow');

Route::get('posts', 'PostController@index')->name('posts.index');

