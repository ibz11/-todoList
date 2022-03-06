<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listController;
use App\Http\Controllers\AdminController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[listController::class,'index']);


Route::post('/saveItemRoute',[listController::class,'saveItem'])->name('saveItem');
Route::post('/complete/{id}',[listController::class,'complete'])->name('complete');

//route::post('/complete',[listController::class,'complete']);
//route::post('/saveItem',[listController::class,'saveItem']);


