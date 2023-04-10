<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ResultController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(LogController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store')->name('halaman1.store');
});

Route::controller(ResultController::class)->group(function () {
    Route::get('/result', 'index')->name('halaman2.index');
    // Route::get('/result', function(){
    //     return view('test');
    // });
});


