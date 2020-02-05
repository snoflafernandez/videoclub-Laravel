<?php

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
Route::get('/','HomeController@getHome');

Route::group(['middleware'=>'auth'],function(){
	Route::get('catalog/index','CatalogController@getIndex');
	Route::get('catalog/show/{id}','Catalogcontroller@getShow');
	Route::get('catalog/create','CatalogController@getCreate');
	Route::get('catalog/edit/{id}','CatalogController@getEdit');
	Route::post('catalog/create','Catalogcontroller@postCreate');
	Route::put('catalog/edit/{id}','CatalogController@putEdit');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');