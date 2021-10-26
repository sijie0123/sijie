<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewController;
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

Route::view('/products', 'createproduct');

Route::get('insert', [ProductController::class, 'form']);
Route::post('create', [ProductController::class, 'insert']);

Route::get('/viewproducts', function () {
    $productinfo = DB::table('products')->get();
    return view('viewproducts', ['productinfo'=>$productinfo]);
});