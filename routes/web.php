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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/capturarpuntos/unavez','puntosfijos@solounaves');
    Route::get('/capturarpuntos/masdeunavez','puntosfijos@morethanonce');
    Route::get('/capturarpuntos/api/municipio','puntosfijos@Municipios');
    Route::post('/capturarpuntos/api/localidad','puntosfijos@Localidades');
    Route::post('/capturarpuntos/api/direccion','puntosfijos@Direccion');
    Route::post('/capturarpuntos/api/unavez','puntosfijos@SaveSolounavez');
});

