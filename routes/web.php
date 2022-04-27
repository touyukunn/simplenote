<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/archives/',function(){
    return view('archieves.index');
});

Route::get('/archives/{category}',function($category){
    return view('category',['category'=>$category]);
});

Route::get('/join/',function(){
    return '入会申し込み完了';
});

Route::get('/{id}/',function($id){
    return $id.'のページ';
});

Route::get('/sum/{x}/{y}/','App\Http\Controllers\MahController@sum');
