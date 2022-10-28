<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GudangController;

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