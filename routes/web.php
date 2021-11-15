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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[\App\Http\Controllers\EventController::class,'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post("timeline",[\App\Http\Controllers\EventController::class,'ajaxtimeline']);

Route::get('events',[\App\Http\Controllers\EventController::class,'events']);
Route::get('eventlist',[\App\Http\Controllers\EventController::class,'getEvents'])->name('events.list');

Route::get("calendar_event",[\App\Http\Controllers\EventController::class,"calendar_event"]);
Route::get("getajaxcalendar",[\App\Http\Controllers\EventController::class,'getajaxcalendar']);
