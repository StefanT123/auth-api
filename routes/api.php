<?php

Route::middleware('guest')->group(function () {
    Route::post('register', 'AuthController@register')->name('register');
    Route::post('login', 'AuthController@login')->name('login');
    Route::post('refresh-token', 'AuthController@refreshToken')->name('refreshToken');
});

Route::middleware('auth:api')->group(function () {
    Route::post('logout', 'AuthController@logout')->name('logout');
});
