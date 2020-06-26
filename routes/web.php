<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::Resource('companies', 'CompaniesController');

Route::get('/projects/create/{company_id?}', 'ProjectsController@index');
Route::Resource('projects', 'ProjectsController');
Route::Resource('roles', 'RolesController');
Route::Resource('tasks', 'TasksController');
Route::Resource('users', 'UsersController');
Route::Resource('comments', 'CommentsController');
