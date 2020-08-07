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

//Route::get('/', function () {
//    return 'asdff';
//});
//
//Route::get('/about', function () {
//    return '123456';
//});

Route::get('/symbol/private_protocol', 'SymbolController@privateProtocol');
Route::get('/symbol/member_service_protocol', 'SymbolController@memberServiceProtocol');
Route::get('/symbol/me_five_private_protocol', 'SymbolController@meFiveServiceProtocol');