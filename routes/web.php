<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
    return redirect('/products');
});
Route::resource('products',\App\Http\Controllers\ProductController::class);

Route::get('/',function (){
    return redirect('/categories');
});
Route::resource('categories',\App\Http\Controllers\CategoryController::class);
