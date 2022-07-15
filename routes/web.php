<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateAccount;

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
    return view('account');
});

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/account', function () {
//     return view('account');
// });

Route::get('/signup', function () {
    return view('signup');
})->name('signup');


Route::post('/createAccount',[createAccount::class, 'store'])->name('createAccount.store');

Route::get('/landing', function () {
    return view('landing');
})->name('landing');

// Route::post('/createAccount', function () {
//     return view('createAccount');
// })->name('createAccount');