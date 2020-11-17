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

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/contact', function (){
   echo "<h2>This is contact page</h2>";
});

Route::get('/about', function () {
   echo "<h2>This is about page</h2>";
});

Route::get('/user/{name?}', function ($name = null){
   echo "<h2> Xin chao $name</h2>";
});
