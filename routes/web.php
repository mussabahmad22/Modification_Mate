<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');

Route::middleware('auth')->group(function () {

    Route::get('/admin_logout', [AdminController::class, 'logout'])->name('admin_logout');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::delete('/delete_user', [AdminController::class, 'delete_user'])->name('delete_user');
    Route::get('/tasks', [AdminController::class, 'tasks'])->name('tasks');
    Route::get('/show_add_task', [AdminController::class, 'show_add_task'])->name('show_add_task');
    Route::post('/add_task', [AdminController::class, 'add_task'])->name('add_task');
    Route::get('/announced', [AdminController::class, 'announced'])->name('announced');

  

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
