<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProjectController;
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
Route::get('index',[ProjectController::class,'index']);


Route::get('/products',[ProjectController::class,'products'])->name('products');



Route::get('/single_product',function(){
    return redirect('/');
});

Route::get('/single_product/{id}',[ProjectController::class,'single_product'])->name('single_product');

Route::get('/cart',[CartController::class,'cart'])->name('cart');

Route::get('/about', function () {
    return view('about');
});


Route::post('/add_to_cart',[CartController::class,'add_to_cart'])->name('add_to_cart');
Route::get('/add_to_cart', function () {
    return redirect('/');
});