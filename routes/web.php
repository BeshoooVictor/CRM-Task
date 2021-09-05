<?php

use App\Http\Controllers\Admin\ProspectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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



Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('employee')->middleware('auth')->name('admin.employees.')->group(function () {
    Route::get('/', 'Admin\EmployeeController@index')->name('dashboard');
    Route::get('create', 'Admin\EmployeeController@create')->name('create');
    Route::post('store', 'Admin\EmployeeController@store')->name('store');
});

Route::prefix('admin')->middleware('auth')->name('admin.prospects.')->group(function () {
    Route::get('/', 'Admin\ProspectController@index')->name('dashboard');
    Route::get('create', 'Admin\ProspectController@create')->name('create');
    Route::post('store', 'Admin\ProspectController@store')->name('store');
});
