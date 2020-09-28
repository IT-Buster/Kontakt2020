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
    return view('welcome');
});

Route::get('/user', 'App\Http\Controllers\UserController@index');
Route::get('/create', 'App\Http\Controllers\UserController@create');
Route::get('/createone', 'App\Http\Controllers\UserController@createone');
Route::get('/delete', 'App\Http\Controllers\UserController@destroy');
Route::get('/update', 'App\Http\Controllers\UserController@update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/contacts', function () {
    return view('contacts/contacts');
})->name('contacts');

Route::middleware(['auth:sanctum', 'verified'])->get('/calculations', function () {
    return view('calculations/calculations');
})->name('calculations');

Route::middleware(['auth:sanctum', 'verified'])->get('/invoices', function () {
    return view('invoices/invoices');
})->name('invoices');

Route::middleware(['auth:sanctum', 'verified'])->get('/settings', function () {
    return view('settings/settings');
})->name('settings');
