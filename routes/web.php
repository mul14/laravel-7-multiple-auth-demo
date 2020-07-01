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

Route::get('/', function () {
    return view('login');
});

Route::post('/login', function () {
    $guard = request('guard');

    $credentials = [
        'username' => request('username'),
        'password' => request('password'),
    ];

    $authGuard = auth($guard);

    if ($authGuard->attempt($credentials)) {
        session()->put('guard', $guard);

        return redirect('/dashboard');
    }

    return back()->withInput()->withMessage('Invalid credentials');
});


Route::get('/dashboard', function() {
    // dd(auth()->user());
    return view('dashboard');
});

Route::post('/logout', function() {
    auth(session()->get('guard'))->logout();

    return redirect('/');
});
