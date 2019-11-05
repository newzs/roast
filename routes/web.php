<?php

//GET 常用于页面读取 //POST 常用于数据提交 //PATCH 常用于数据更新 //DELETE 常用于数据删除

Route::get('/','StaticPagesController@home')->name('home');;
Route::get('/help','StaticPagesController@help')->name('help');;
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('/signUp', 'UsersController@create')->name('signUp');

Route::resource('users', 'UsersController');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

Route::get('signUp/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


