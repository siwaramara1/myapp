<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::prefix("user")->middleware("auth")->group(function(){
    Route::view('/welcome', 'welcome', ['name' => 'taylor']);
});

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/login', function () {
    return "hi";
});

Route::redirect('/r1', '/r2');

Route::get('/r2', function () {
    return "r2";
});
