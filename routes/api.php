<?php

use App\Http\Controllers\API\HouseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->group(function () {
    // مسارات تتطلب المصادقة (Authentication)
    Route::get('/houses', [HouseController::class, 'index']); // استعراض المنازل
    //Route::post('/houses', [HouseController::class, 'store']); // إنشاء منزل جديد
    Route::get('/houses/{id}', [HouseController::class, 'show']); // عرض تفاصيل منزل
    Route::put('/houses/{id}', [HouseController::class, 'update']); // تحديث منزل
    Route::delete('/houses/{id}', [HouseController::class, 'destroy']); // حذف منزل
});
// khaled

// مسارات عامة يمكن الوصول إليها دون مصادقة
Route::get('/houses', [HouseController::class, 'index']); // استعراض المنازل (عام)
Route::get('/houses/{id}', [HouseController::class, 'show']); // عرض تفاصيل منزل (عام)
Route::post('/houses', [HouseController::class, 'store']);
