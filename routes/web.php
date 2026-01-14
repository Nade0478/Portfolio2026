<?php

use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

 // routes/api.php
Route::get('/skills', [SkillController::class, 'index']);
Route::get('/skills/{id}', [SkillController::class, 'show']);
Route::get('/cv', [CvController::class, 'show']);
Route::apiResource('competences', CompetenceController::class);
Route::apiResource('skills', SkillController::class);
Route::apiResource('cvs', CvController::class);
Route::apiResource('competences', CompetenceController::class);
Route::apiResource('skills', SkillController::class);
