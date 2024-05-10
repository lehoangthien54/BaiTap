<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
Route::get('/', function () {
    return view('welcome');
});
Route::get("/",function(){ echo "Hello World!"; });
Route::get("home", function(){ return "Home"; });
Route::get("welcome", function(){return view("welcome");}); 
Route::get("user",[usercontroller::class,"index"]);
Route::get("user/1",[usercontroller::class,"show"]); 
Route::get("user/{id}/edit",[usercontroller::class,"edit"])->name("user.edit");
Route::get("user/list/{page?}",[usercontroller::class,"list"])->name("user.list");