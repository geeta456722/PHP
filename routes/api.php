<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Modules\User\Entities\User;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('register', function (Request $request) {
    $user = User::create([
        "name" => "Muhammad",
        "password" => Hash::make("kajshjasdhkjasd"),
        "email" => "muhammadyibr@gmail.com"
    ]);

    return $user->createToken("Auto Generated");
});

Route::get('gen', function (Request $request) {
    $user = User::find(3);

    $token = $user->createToken("Test Name");

    return $token->plainTextToken;

    return $user;
});

Route::middleware('auth:sanctum')->get('test', function (Request $request) {
    return response()->json([
        'name' => 'Abigail',
        'state' => 'CA'
    ])->header('Content-Type', "application/json");
});
