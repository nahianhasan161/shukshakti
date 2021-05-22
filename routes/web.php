<?php

use App\Mail\MessageMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
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
if (App::environment('production')) {
    URL::forceScheme('https');
}
Route::get('/', function () {
    return view('landing');
});

Route::post('/store', [App\Http\Controllers\MessageController::class, 'store'])->name('store');


Route::get('/contract', function () {
    return view('contract');
});
Route::get('/message', function () {
    $data = ['email'=>'hello','name'=>'hello','message'=>'hello'];
   
    return new MessageMail($data);
});


Route::get('/coming', function(){
    return view('coming_soon/coming_soon');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

