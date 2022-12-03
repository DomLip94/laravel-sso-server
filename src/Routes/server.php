<?php

/**
 * Routes which is neccessary for the SSO server.
 */

Route::middleware(['api', \Illuminate\Session\Middleware\StartSession::class])->prefix('api/sso')->group(function () {
    Route::post('login', 'Muteg\LaravelSSOServer\Controllers\ServerController@login');
    Route::post('logout', 'Muteg\LaravelSSOServer\Controllers\ServerController@logout');
    Route::get('attach', 'Muteg\LaravelSSOServer\Controllers\ServerController@attach');
    Route::get('userInfo', 'Muteg\LaravelSSOServer\Controllers\ServerController@userInfo');
});

Route::get('login', 'Muteg\LaravelSSOServer\Controllers\LoginController@showLoginForm')->name('login');
Route::post('login', 'Muteg\LaravelSSOServer\Controllers\LoginController@login');
