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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route for Dashboard module 
Route::get('administration/dashboard', 'DashboardController@showadministrationdashboard')->name('showadministrationdashboard');

Route::get('employee/dashboard', 'DashboardController@showemployeedashboard')->name('showemployeedashboard');
Route::get('student/dashboard', 'DashboardController@showstudentdashboard')->name('showstudentdashboard');
Route::get('parent/dashboard', 'DashboardController@showparentdashboard')->name('showparentdashboard');

//System Admin 
Route::get('systemadmin/dashboard', 'DashboardController@showsystemadmindashboard')->name('showsystemadmindashboard');
Route::get('systemadmin/systemusers', 'SystemusersController@index')->name('showsystemusers');




