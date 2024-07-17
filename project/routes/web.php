<?php

use DebugBar\DebugBar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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

//lesson 1: Routing
//1.1 basic routing (default)
Route::get('/default',function(){
    return "hello world";
});
Route::get('/blog',[PostsController::class,'index']);