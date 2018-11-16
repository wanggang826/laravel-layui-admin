<?php
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('login', 'LoginController@index')->name('admin.index');
    Route::post('login', 'LoginController@signIn')->name('admin.login');
    Route::get('logout', 'LoginController@logout')->name('admin.logOut');
});