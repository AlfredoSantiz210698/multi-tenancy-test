<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tenant Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['web'])
    ->namespace('App\Http\Controllers\Tenant')
    ->as('tenant.')
    ->group( function(){
        Route::get('/', 'HomeController@index')->name('tenantHome');
        Route::get('/home', 'HomeController@index')->name('tenantHome');
    });