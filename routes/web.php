<?php

use App\Http\Controllers\PostController;
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

$data = array("name" => "lala", "mail" => "lala@mail.com");

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () use($data) {
    return view('about', $data);
});

Route::get('/tugas', function () use($data) {
    return view('tugas', $data);
});

Route::get('/boom', [PostController::class, 'boomesport']);