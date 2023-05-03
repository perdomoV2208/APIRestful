<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/**
 * Buyers
 */
Route::resource('buyers', 'App\Http\Controllers\Buyer\BuyerController', ['only' => ['index', 'show']]);

/**
 * Categories
 */
Route::resource('categories', 'App\Http\Controllers\Category\CategoryController', ['except' => ['create', 'edit']]);


/**
 * Products
 */
Route::resource('products', 'App\Http\Controllers\Product\ProductController', ['only' => ['index', 'show']]);

/**
 * Transactions
 */
Route::resource('transactions', 'App\Http\Controllers\Transaction\TransactionController', ['only' => ['index', 'show']]);

/**
 * Sellers
 */
Route::resource('sellers', 'App\Http\Controllers\Seller\SellerController', ['only' => ['index', 'show']]);

/**
 * Users
 */
Route::resource('users', 'App\Http\Controllers\User\UserController', ['except' => ['create', 'edit']]);
