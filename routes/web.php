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

Route::resource('responsables', 'ResponsableController'); 
Route::resource('solicitud', 'SolicitudController'); 
Route::resource('respuesta', 'RespuestaController'); 
Route::resource('area', 'AreaController'); 
Route::resource('tipousuario', 'TipoUsuarioController'); 
Route::resource('tipodocumento', 'TipoDocumentoController'); 

