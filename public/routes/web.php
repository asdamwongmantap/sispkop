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

Route::get('/','Logincontroller@index');
Route::post('/ceklogin','Logincontroller@ceklogin');
Route::get('/logout','Logincontroller@logout');
Route::post('/savetask','Taskcontroller@create');
Route::post('/savepoint','Taskcontroller@createpoint');
Route::get('/register','Registercontroller@index');
Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard','Maincontroller@index');
    //task
    Route::get('/mytask','Taskcontroller@listtask');
    Route::get('/addtask','Taskcontroller@addtask');
});
