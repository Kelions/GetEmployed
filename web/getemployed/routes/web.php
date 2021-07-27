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
//Asi se define una ruta de tipo vista
Route::view("/","home")->name("home");
Route::view("/copetes","copetes")->name("copetes");
Route::view("/ventas","ventas")->name("ventas");
Route::view("/compras","compras")->name("compras");

