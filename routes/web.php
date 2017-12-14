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

Route::get('/', 'UsuarioController@inicio');

/*
Route::get('/usuario',function(){
	return 'Perfil del usuario';
});
*/


Route::get('/usuario', 'UserController@index');


Route::get('/usuario/{id}', 'UserController@show')->where('id','[0-9]+');


Route::get('usuario/nuevo','UserController@create');

Route::get('saludo/{name}/{nickname?}' , 'WelcomeUserController'  );

Route::get('/login', 'UsuarioController@index');

