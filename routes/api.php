<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::post('/post',[OrderController::class,'createOrder']);
Route::get('/posts/order',[OrderController::class,'fetchOrder']);
Route::get('/posts/delivered',[OrderController::class,'fetchDelivered']);
Route::get('/posts/delivery',[OrderController::class,'fetchDelivery']);
Route::get('/post/edit/{id}',[OrderController::class,'editOrder']);
Route::post('/post/update',[OrderController::class,'updateOrder']);
Route::delete('/post/delete/{id}',[OrderController::class,'deleteOrder']);
Route::put('/post/updateStat/{id}',[OrderController::class,'updateStatus']);
Route::put('/post/updateCanceledStat/{id}',[OrderController::class,'updateCancelledStatus']);
// Route::post('/create/stock',[IngredientsController::class,'createStock']); 
Route::get('/fetch/stock',[IngredientsController::class,'fetchStock']);
Route::get('/fetch/sumOrder',[ProductController::class,'orderSum']);
// Route::get('/fetch/expectedProduct',[ProductController::class,'fetchExpectedProd']);
// Route::get('/fetch/stockStatus',[ProductController::class,'stockStatus']);
Route::get('/post/editStock/{id}',[IngredientsController::class,'editStockIngredients']);
Route::post('/sales/daily',[SalesController::class,'index']);
Route::post('/sales/weekly',[SalesController::class,'indexWeekly']);
Route::post('/sales/monthly',[SalesController::class,'indexMonthly']);
Route::get('/sales/filterYear',[SalesController::class,'selectYear']);
Route::get('/sales/yearly',[SalesController::class,'indexYearly']);
Route::post('/post/updateStock',[IngredientsController::class,'updateStockIngredients']);
Route::post('/post/addStockAmount',[IngredientsController::class,'updateStockAmount']);

// Route::get('/fetch/fetchUsedIng',[IngredientsController::class,'fetchUsedIngredients']);

// Route::get('/fetch/checkStatus',[IngredientsController::class,'checkStatus']);
Route::post('/post/usedIngredients',[IngredientsController::class,'saveUsedIngredients']);
Route::get('/fetch/checkStatus',[IngredientsController::class,'checkStatus']);
Route::post('/fetch/updateStatus',[IngredientsController::class,'updateStatus']);
Route::post('/posts/ingredients',[IngredientsController::class,'newIngredients']);
Route::post('/post/saveRealNumbers',[IngredientsController::class,'saveRealAmount']);
Route::post('/post/neededValue',[IngredientsController::class,'addEstimatedAmount']);
Route::get('/fetch/estimatedValue',[IngredientsController::class,'fetchEstimatedValue']);
Route::get('/post/updateEstimatedValue/{id}',[IngredientsController::class,'editEstimatedValue']);
Route::post('/post/updateNewEstimatedValue',[IngredientsController::class,'updateEstimatedValue']);

