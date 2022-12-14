<?php

use App\Http\Controllers\BusinessBannerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home', function () {
    return view('home.index');
});

Route::get('/admin', function () {
    return view('admin.home.index');
});

Route::get('business_banner', [BusinessBannerController::class, 'index']);
Route::get('business_banner/{business_banner}', [BusinessBannerController::class, 'show']);
Route::post('business_banner', [BusinessBannerController::class, 'store']);
Route::put('business_banner/{business_banner}', [BusinessBannerController::class, 'update']);
Route::delete('business_banner/{business_banner}', [BusinessBannerController::class, 'delete']);
