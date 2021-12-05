<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'dashboard/', 'middleware' => ['auth']], function () {

    //client
    Route::get('/', [ClientController::class, 'index'])
        ->name('dashboard');

    Route::get('/client/create', [ClientController::class, 'create'])
        ->name('client.create');

    Route::post('/client', [ClientController::class, 'store'])
        ->name('client.store');

    Route::get('/client/edit/{id}', [ClientController::class, 'edit'])
        ->name('client.edit');

    Route::post('/client/update/{id}', [ClientController::class, 'update'])
        ->name('client.update');

    Route::get('/client/delete/{id}', [ClientController::class, 'delete'])
        ->name('client.delete');
});

Route::get('/', function () {
    return view('auth.login');
});
require __DIR__ . '/auth.php';
