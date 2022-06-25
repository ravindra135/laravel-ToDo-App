<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
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

Route::get('/', [TaskController::class, 'index'])->name('home');
Route::put('/{task}', [TaskController::class, 'markAsFinished'])->name('finish.task');
Route::delete('/{task}', [TaskController::class, 'destroy'])->name('delete.task');

Route::get('/add', [TaskController::class, 'create'])->name('add.task');
Route::post('/', [TaskController::class, 'store'])->name('store.task');

Route::get('/finished', [TaskController::class, 'finished'])->name('finished.task');

Route::get('/trashed', [TaskController::class, 'trashed'])->name('trashed.task');

Route::post('/trashed/{id}/force-delete', [TaskController::class, 'forcedelete'])->name('remove.task');

Route::resource('task', TaskController::class);