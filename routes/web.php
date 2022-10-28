<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\BrandController;
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
    return view('welcome');
});

Route::controller(GudangController::class)->group(function () {
    Route::prefix('gudang')->group(function () {
        Route::get('', 'index')->name('gudang.index');
        Route::get('create', 'create')->name('gudang.create');
        Route::post('store', 'store')->name('gudang.store');
        Route::get('show/{id}', 'show')->name('gudang.show');
        Route::get('edit/{id}', 'edit')->name('gudang.edit');
        Route::patch('update/{id}', 'update')->name('gudang.update');
        Route::delete('destroy/{id}', 'destroy')->name('gudang.destroy');
    });
});

Route::controller(BrandController::class)->group(function () {
    Route::prefix('brand')->group(function () {
        Route::get('', 'index')->name('brand.index');
        Route::get('create', 'create')->name('brand.create');
        Route::post('store', 'store')->name('brand.store');
        Route::get('show/{id}', 'show')->name('brand.show');
        Route::get('edit/{id}', 'edit')->name('brand.edit');
        Route::patch('update/{id}', 'update')->name('brand.update');
        Route::delete('destroy/{id}', 'destroy')->name('brand.destroy');
    });
});

Route::controller(ProductController::class)->group(function () {
    Route::prefix('product')->group(function () {
        Route::get('', 'index')->name('product.index');
        Route::get('create', 'create')->name('product.create');
        Route::post('store', 'store')->name('product.store');
        Route::get('show/{id}', 'show')->name('product.show');
        Route::get('edit/{id}', 'edit')->name('product.edit');
        Route::patch('update/{id}', 'update')->name('product.update');
        Route::delete('destroy/{id}', 'destroy')->name('product.destroy');
    });
});