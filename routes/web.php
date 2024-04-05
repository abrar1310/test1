<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\Tt;
// use App\Http\Controllers\employeesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\workerController;

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

// Route::get('/product',[Tt::class ,'hi']);



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


// Route::get('/product', [HomeController::class, 'hi'])->name('product');


// Route::any('/register', [App\Http\Controllers\HomeController::class, 'index']);

// Auth::routes(['register','login' => false]);

// Route::middleware(['auth'])->group(function () {
//     Route::get('/product', [App\Http\Controllers\HomeController::class, 'hi'])->name('product');
//     Route::any('/register', [App\Http\Controllers\HomeController::class, 'abrar'])->name('register');
// });

Route::get('/all-workers-only',[workerController::class,'users' ])->name('users');
Route::get('/all-admins-only',[workerController::class,'admins' ])->name('admins');

Route::get('/workers',[workerController::class,'index' ])->name('index');
Route::get('/employees',[workerController::class,'create' ])->name('create');
Route::post('/store',[workerController::class,'store' ])->name('store');


Route::get('/edit/{id}',[workerController::class,'edit' ])->name('edit');
Route::put('/update/{id}',[workerController::class,'update' ])->name('update');


Route::delete('/delete/{id}',[workerController::class,'destroy' ])->name('delete');


