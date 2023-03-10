<?php

use App\Http\Livewire\Admin\Admin\AdminIndex;
use App\Http\Livewire\Admin\User\UserIndex;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth','admin'])->prefix('admin')->as('admin.')->group(function(){

    Route::get('/', AdminIndex::class)->name('index');
    Route::get('/users', UserIndex::class)->name('user.index');
});
