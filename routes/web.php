<?php

use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AdminController::class,'index'])->name('dashboard');
Route::get('/login/Page',[AdminController::class,'loginPage'])->name('loginPage');
Route::post('/login/Admin',[AdminController::class,'login'])->name('login');
Route::post('/add-admin',[AdminController::class,'addAdmin'])->name('add-admin');
