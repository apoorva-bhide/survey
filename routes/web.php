<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionnaireController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/questionnaires/create', [App\Http\Controllers\QuestionnaireController::class, 'create'])->name('create');
Route::post('/questionnaires', [App\Http\Controllers\QuestionnaireController::class, 'store'])->name('create');
Route::get('/questionnaires/{questionnaire}',[App\Http\Controllers\QuestionnaireController::class, 'show'])->name('create');

Route::get('/questionnaires/{questionnaire}/questions/create', [App\Http\Controllers\QuestionController::class, 'create'])->name('create');
Route::post('/questionnaires/{questionnaire}/questions', [App\Http\Controllers\QuestionController::class, 'store'])->name('create');
Route::delete('/questionnaires/{questionnaire}/questions/{question}', [App\Http\Controllers\QuestionController::class, 'destroy'])->name('create');

Route::get('/surveys/{questionnaire}-{slug}', [App\Http\Controllers\SurveyController::class, 'show'])->name('create');
Route::post('/surveys/{questionnaire}-{slug}', [App\Http\Controllers\SurveyController::class, 'store'])->name('create');