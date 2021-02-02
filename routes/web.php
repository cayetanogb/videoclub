<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', 'HomeController@getHome');

Route::get('auth/login', function () {
    return view('auth.login');
});

Route::get('catalog', 'CatalogController@getIndex')->name('catalog');

Route::get('catalog/show/{id}', 'CatalogController@getShow')->name('show');

Route::get('catalog/create', 'CatalogController@getCreate')->name('create');

Route::get('catalog/{id}/edit', 'CatalogController@getEdit')->name('editar');

Route::put('catalog/{id}', 'CatalogController@getUpdate')->name('update');

Route::post('catalog/add', 'CatalogController@getAdd')->name('add');