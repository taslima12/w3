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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return "<h2>Hello about</h2>";
// });

// Route::get('/about', function () {
//     return "<h2>Hello about</h2>";
// });

// Route::get('/abc', function () {
//     return "<h2>Hello abc</h2>";
// });

// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/about/{name}/{age}', function ($name,$age) {
//     return "<h2>Hello $name. You're $age years old</h2>";
// });

// Route::get('/info/{name?}/{age?}', function ($name="Niha",$age="20") {
//     return "<h2>Hello $name. You're $age years old</h2>";
// });

// Route::get('/sum', function () {
//     return view('form');
// });
// Route::get('/process', function () {
//     $num1=$_REQUEST['number1'];
//     $num2=$_REQUEST['number2'];
//     return $num1+$num2;
// });


//  Route::get('/sum', function () {
//    return view('form1');
//  });

// Route::get('/process1', function () {
//    return view("table", $_REQUEST);
//  });

//===============end==============//

//=============1st clss start==============//

// Route::get('/', function(){
//    return view('welcome');
// });

// Route::get('/about', function(){
//    return "<h2>hello about</h2>";
// });

// Route::get('/abc', function(){
//    return "<h2>hello abc</h2>";
// });

// Route::get('/test', function(){
//    return view('test');
// });
// Route::get('/about/{name}/{age}', function($name,$age){
//    return "<h2>hello $name.You,re $age years old</h2>";
// });

// Route::get('/info/{name?}/{age?}', function($name="niha",$age="19"){
//    return "<h2>hello $name.You,re $age years old</h2>";
// });

//============ 1st end=============//

//==============2nd clss start============//

// Route::get('/sum', function(){
//    return view('form');
// });

// Route::get('/process', function(){
//    $num1=$_REQUEST['number1'];
//    $num2=$_REQUEST['number2'];
//    return $num1+$num2;
// });

// Route::get('/sum', function(){
//    return view('form1');
// });
// Route::get('/process1', function(){
//    return view("table", $_REQUEST);
// });

//=============== 2nd end====================//

//===============3rd clss start====================//

// Route::get('/sayhello','homecontroller@sayhello');

// Route::get('/sayhello/{name}','homecontroller@sayhello');

// Route::get('/getRange/{start}/{end}','homecontroller@getRange');

// Route::get('/sum','homecontroller@getform');

// Route::get('/process','homecontroller@sum');

//===============3rd clss end====================//

//===================4th clss start===================//

// Route::get('/getall',function(){

// 	$fetchData=DB::select("SELECT * FROM students");
// 	echo "<pre>";
// 	print_r($fetchData);
// 	echo "</pre>";
// });

// Route::get('/getall','homecontroller@getAll');

//Route::get('/getinfo','homecontroller@getinfo');

// Route::get('/getinfo/{name}/{age}','homecontroller@getinfo');
//===================4th clss end===================//

//==============5th clss start================//
// Route::get('/senddata',function(){

// 	$student=["name"=>"Masud","mobile"=>"01754327534","address"=>"Dhaka"];
// 	return view("table2",$student);
// });


 // Route::get("/show",function(){
 // 	$data=DB::select("SELECT * FROM students");
	// return view("table2",["students"=>$data]);
 // });

  // Route::get('/show','homecontroller@getAll');
//===========6th clss start=================//
//  Route::get('/test', function(){
//    return view('pages.test');
// });
// Route::get('/test', function(){
//    return view('pages2.test');
// });

// Route::get('/test', function(){
//    return view('pages3.test');
// });

 
 // Route::get('/form', function(){
 //    return view('index');
 // });

 // Route::get('/process','homecontroller@process');

//===========6th clss end=================//


//===========7th clss start=================//
 // Route::get('/greeting',function(){
 // 	return view("greeting",["name"=>"Masud", "age"=>33]);

 // });

 // Route::get('/greeting','homecontroller@getAll');

//===================7th clss end===========//

 //===========8th clss start=================//

// Route::get('/sum', function(){
// 	return view('form.form2');
// });
// Route::get('/process', 'homecontroller@process');

// Route::get('/sum', function(){
// 	return view('form.form2');
// });
// Route::get('/process', 'homecontroller@process');

 //===========8th clss end=================//

//==============9 clss start===============//
//database tableshow//
// Route::get('showalldata', function(){
// 	$data=DB::select("SELECT * FROM students");
// 	echo "<br>";
// 	print_r($data);
// 	echo "<br>";
// });
// //bootstrap tableshow//
// Route::get('/showdata', function(){
// 	return view("july14");
// });
// //blade show databasetable data//
// Route::get('showtabledata', 'homeController@july14');
// // Create this link to show table
//==============9 clss end===============//
Route::view('/admin', 'admin.dashboard.index');

