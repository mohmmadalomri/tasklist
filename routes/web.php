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


Route::get('about', function () {



    return view('about');
});



Route::get('tasks', function () {


    $Tasks =[
       '1' => 'task1',
       '2' => 'task2',
       '3' => 'task3'

    ];
    return view('tasks',compact('Tasks'));
});



Route::get('task/show/{id}', function ($id) {

    $Tasks =[
        '1' => 'task1',
        '2' => 'task2',
        '3' => 'task3'
    ];

    $Task =$Tasks[$id];
    dd($Task);
        return view('show',compact('Task'));
});


