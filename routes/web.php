<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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


Route::get('/getform','TestController@getform');
Route::post('/postform','TestController@postform')->name('formpost');
Route::get('/alltests','TestController@alltests');
Route::get('/editpage/{id?}','TestController@edit')->name('editpage');
Route::post('/editform/{id?}','TestController@editform')->name('formedit');
Route::get('/deletepage/{id?}','TestController@deletepage')->name('deletepage');
Route::get('/softdelete/{id?}','TestController@softdelete');
Route::get('/readsoftdelete/{id?}','TestController@readsoftdelete');
Route::get('/restoresoftdelete/{id?}','TestController@restoresoftdelete');
Route::get('/forcesoftdelete/{id?}','TestController@forcesoftdelete');
Route::get('/alltestsjoins','TestController@alltestsjoins');