<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Sample\IndexController;
use App\Http\Controllers\Tweet\IndexController;



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

// Route::get('/sample', [IndexController::class, 'show'])->name('welcome');
// Route::get('/sample/{id}', [IndexController::class, 'showId'])->name('welcomeId');
Route::get('/tweet', \App\Http\Controllers\Tweet\IndexController::class)->name('tweet.index');
Route::post('/tweet/create', \App\Http\Controllers\Tweet\CreateController::class)->name('tweet.create');
// パラメータで整数値だけ受け取る
Route::get('/tweet/update/{tweetId}', \App\Http\Controllers\Tweet\Update\IndexController::class)->name('tweet.update.index')->where('tweetId', '[0-9]+');
Route::put('/tweet/update/{tweetId}', \App\Http\Controllers\Tweet\Update\PutController::class)->name('tweet.update.put')->where('tweetId', '[0-9]+');
Route::delete('/tweet/delete/{tweetId}', \App\Http\Controllers\Tweet\DeleteController::class)->name('tweet.delete')->where('tweetId', '[0-9]+');