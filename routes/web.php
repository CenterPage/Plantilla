<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'admin',
              'namespace' => 'Admin',
              // 'middleware' => 'auth'
          ],
function() {
    Route::get('/', 'AdminController@index')->name('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
