<?php

use Illuminate\Support\Facades\Route;
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
    return view('index');
});

Route::get('login', 'App\Http\Controllers\FrontendController@login');
Route::get('register', 'App\Http\Controllers\FrontendController@register');

// Admin Routes 
Route::get('admin-dashboard/home', 'App\Http\Controllers\FrontendController@adminDashboard');
Route::get('admin-dashboard/ar-admin-profile', 'App\Http\Controllers\FrontendController@adminProfile');
Route::get('admin-dashboard/ar-analytics', 'App\Http\Controllers\FrontendController@adminAnalytics');
Route::get('admin-dashboard/crashlogs-report', 'App\Http\Controllers\FrontendController@adminCrashLogs');
Route::get('admin-dashboard/ar-transaction-overview', 'App\Http\Controllers\FrontendController@adminOverview');
Route::get('admin-dashboard/ar-user-authentication', 'App\Http\Controllers\FrontendController@adminUserAuth');
Route::get('admin-dashboard/ar-user-control', 'App\Http\Controllers\FrontendController@adminUserControl');
Route::get('admin-dashboard/ar-web-monitoring', 'App\Http\Controllers\FrontendController@adminMonitoring');
Route::get('admin-dashboard/ar-web-updates', 'App\Http\Controllers\FrontendController@adminWebUpdates');
