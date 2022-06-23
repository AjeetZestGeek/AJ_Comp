<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CompanyCRUDController;
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

Route::get('my-route',function(){
    return view('myfirstview');
});

// Route::get('first-page/{name?}',function($name = 'Ajeet'){
//     return view('my1stpage',['name'=>$name]);
// });

// Route::get('role',[
// 'middleware' => 'Role:editor'],  );

Route::middleware(['Zest'])->group(function(){

    Route::get('check-middleware/{id?}',function($id){
        echo $id;
    });
});

Route::get('first-page/{age?}', function ($age) {
    return view('my1stpage',['age'=>$age]);
})->middleware('Age');

// Route::get('role',[
// 'middleware' => 'Role:editor',
// 'uses' => 'TestController@index',
// ]);


Route::get('controller',[App\Http\Controllers\MyFirstController::class,'test']);

Route::get('user', [App\Http\Controllers\MyFirstController::class,'create']);
Route::post('store', [App\Http\Controllers\MyFirstController::class,'store']);
 
Route::resource('companies', CompanyCRUDController::class);

