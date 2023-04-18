<?php

use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

Route::get('/admin/home',['as'=>'admin.home','uses'=>'Admin\HomeController@index']);

});
