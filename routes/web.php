<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\ChatController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ClubController::class, 'index']);
Route::get('/chat-forum', [ChatController::class, 'index'])->name('chat.index');
Route::post('/chat-forum/send-message', [ChatController::class, 'sendMessage'])->name('chat.send.message');