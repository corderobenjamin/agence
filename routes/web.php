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

Route::get('/', 'DesempenhoController@index');

Route::get('relatorio', 'DesempenhoController@relatorio');

Route::get('grafico', 'DesempenhoController@grafico');

Route::get('pizza', 'DesempenhoController@pizza');