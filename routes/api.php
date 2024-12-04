<?php

use App\Http\Controllers\imageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group([
    'prefix' => 'image'
], function(): void {
    Route::post('/create', [imageController::class, 'create']);
});
