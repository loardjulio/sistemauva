<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


 Route::get('/vagas', function () {
     return view('trabalheConosco');     
 });

  Route::get('/login', function () {
     return view('paginaLogin');     
 });
 
  Route::get('/sobre', function () {
     return view('quemSomos');     
 });
  
 
Route::get('/',['uses' => 'Controller@homepage']); //define qual será a pagina inicial