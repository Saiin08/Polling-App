<?php

use App\Http\Controllers\PollController;
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

Route::get('/',[PollController::class,'index'])->name('home');

Route::get('/about-us',function(){
    return view('about.about-us');
});

Route::get('/edit/{id?}',[PollController::class,'edit'])->name('poll.edit');