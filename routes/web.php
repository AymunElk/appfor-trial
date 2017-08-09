<?php

Route::get('/login', 'LoginController@index')->name('login_get');
Route::post('/login', 'LoginController@store')->name('login_post');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard_get');

    Route::get('/earnings/create', 'EarningsController@create')->name('earnings_create_get');
    Route::post('/earnings', 'EarningsController@store')->name('earnings_store_post');

    Route::get('/reports', 'ReportsController@index')->name('reports_index_get');
    Route::get('/reports/{year}/{month}', 'ReportsController@show')->name('reports_show_get');

    Route::get('/settings', 'SettingsController@index')->name('settings_get');
    Route::post('/settings', 'SettingsController@store')->name('settings_post');
});

Route::get('/logout', 'LogoutController@index')->name('logout_get');
