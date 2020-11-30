<?php

use App\Http\Controllers\UsersController;
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
    return view('page.dashboard.index');
});

// Route::get('/user', function () {return view('page.users.index');});
Route::get('/user', [App\Http\Controllers\UsersController::class, 'index'])->name('user_index');

Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu');
Route::get('/menu/get', [App\Http\Controllers\MenuController::class, 'getMenuAll'])->name('get_menu');
Route::get('/menu/get/{?id}', [App\Http\Controllers\MenuController::class, 'getMenu'])->name('get_menu_id');


