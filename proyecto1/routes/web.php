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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','HomeController@getHome');

Route::get('login',function()
{
	return view('auth.login');
});

Route::get('logout',function()
{
	return 'Logout usuario';
});

Route::get('catalog/index','CatalogController@getIndex');

Route::get('catalog/show/{id}','Catalogcontroller@getShow');

Route::get('catalog/create','CatalogController@getCreate');

Route::get('catalog/edit/{id}','CatalogController@getEdit');


//regla de expresion regular
//->where('name','[a-zA-Z]+');

//va con el archivo que contiene la vista /resources/views/home.php
Route::get('/prueba',function()
{
	return view('home',array('nombre'=>'Juan'));
});


/*Route::get('/nosotros','PaginasController@nosotros');

Route::get('/contacto','PaginasController@contacto');

Route::get('/test' , function(){
	return 'aprendiendo las rutas';
});

Route::get('usuarios/{nombre}',function($nombre){
	return $nombre;
});*/
