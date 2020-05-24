<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/admin')->namespace('Admin')->group(function() {
  // All the admin routes will be defined here :-
  Route::match(['get','post'],'/', 'AdminController@login');

  Route::group(['middleware' => ['admin']], function () {

    Route::get('dashboard', 'AdminController@dashboard');
    Route::get('settings', 'AdminController@settings');
    Route::get('logout', 'AdminController@logout');

    // Route to check Current Password from admin_scripts.js
    Route::post('check-current-pwd','AdminController@chkCurrentPassword');
     // Route to Update Current Password from admin_scripts.js
    Route::post('update-current-pwd','AdminController@updateCurrentPassword');
    Route::match(['get','post'], 'update-admin-details', 'AdminController@updateAdminDetails');

  });
});
