<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use function GuzzleHttp\Promise\task;

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


Route::get('tasks', function () {

    $Tasks =DB::table('task')->get();
    return view('tasks',compact('tasks'));
});

Route::get('tasks/show/{id}', function ($id) {
    $task = DB::table('tasks')->find($id);
    return view('show' ,compact('task'));
});

Route::get('app', function () {
    $Tasks=DB::table('tasks')->get();
    return view('todo',compact('tasks'));
});



Route::post('store', function (Request $request) {
    //  DB::table('tasks')->insert([
     //     'title' => $request->title

     //  ] );


     $task =new Task;
     $task->title = $request->$title;
     $task-> save();



    return redirect()->back();
});


Route::post('Delete/{title}', function ($title) {
    Task::where('title',$title)-> delete();

    return redirect()->back();
});
