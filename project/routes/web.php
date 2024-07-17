<?php

use App\Http\Controllers\Controller;
use DebugBar\DebugBar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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
Route::get('/', function () {
    return view('welcome');
});

//lesson 1: Routing
//1.1 basic routing (default)
Route::get('/default',function(){
    return "hello world";
});
//1.2 routing với controller 
Route::get('/1.2',[TestController::class,'index']);

//1.3 Các phương pháp định tuyến có sẵn ?
Route::post('/delete/{name}',function(string $name){
    return $name;
});
//1.4 Routing có thêm paramenter
Route::get('/user/{id}/{idx?}', function (string $iid,string $a=null) {
    return 'User '.$iid.$a;
});

//1.5 Ràng buộc biểu thức chính quy
Route::get('/user1/{id}/{idx?}', function (string $iid,string $a=null) {
    return 'User '.$iid.$a;
})->where('id','[az]');

Route::get('/user1/{id}/{idx?}', function (?string $iid,string $a="2") {
    return 'User '.$iid.$a;
})->where('id','[a-z]');

Route::get('/products/{category?}', function (string $category = null) {
    if ($category) {
        // Xử lý trường hợp có giá trị
        echo "Category: " . $category;
    } else {
        // Xử lý trường hợp không có giá trị
        echo "No category specified";
    }
});
//1.6 Cho phép http://127.0.0.1:8000/search/a*/bc in ra a*/bc không làm thì không đc
//  làm ở cuối
Route::get('/search/{search}', function (string $search) {
    return $search;
})->where('search', '.*');

//1.7 đề kiện cho tất cả các Route App\Providers\AppServiceProvider: nằm ở đây

//1.8
Route::get('/rename/ddddprofiles/{a}', function (string $a) {
    // ...
    return $a;
})->name('profiles');

 
// Generating Redirects...

 


Route::get('/a/{id}/profile', function (string $id) {
    // ...
    return redirect()->route('profiles',[
        'a'=>"chanquadi"
    ]);
    
})->name('profile');


// /a/1/profile?photos=yes

Route::fallback(function () {
    return "404hehe";
});