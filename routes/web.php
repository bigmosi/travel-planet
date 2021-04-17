<?php
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\HotelController;

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

Route::view('/','home');
Route::get('/hotels',[HotelController::class,'index']);
Route::get('/reservations',[ReservationController::class,'store']);
Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback')->name('auth0-callback');
Route::get('/login', '\Auth\Auth0IndexController@login')->name('login');
Route::get('/logout', 'Auth\Auth0IndexController@logout')->name('logout')->middleware('auth');

Route::group(['prefix'=> 'dashboard'], function(){
    Route::view('/', 'dashboard/dashboard');
    Route::get('reservations/create/{id}', [ReservationController::class, 'create']) -> name('create');
    // Route::resource('reservations', 'ReservationController')->except('create');
    Route::post('reservations', [ReservationController::class, 'store']);
    Route::get('reservations', [ReservationController::class, 'index']);
    Route::get('reservations', [ReservationController::class, 'store']) ->name('reservations.store');
});

