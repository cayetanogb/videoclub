<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@getHome');

Route::middleware('auth')->group(function () {
    Route::get('catalog', 'CatalogController@getIndex')->name('catalog');
    
    Route::get('catalog/show/{id}', 'CatalogController@getShow')->name('show');
    
    Route::get('catalog/create', 'CatalogController@getCreate')->name('create');
    
    Route::get('catalog/{id}/edit', 'CatalogController@getEdit')->name('editar');
    
    Route::put('catalog/{id}', 'CatalogController@putEdit')->name('update');
    
    Route::post('catalog/add', 'CatalogController@postCreate')->name('add');
    
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Auth::routes();

Route::get('/logout', function () {
    return view('auth.logout');
})->name('logout');
