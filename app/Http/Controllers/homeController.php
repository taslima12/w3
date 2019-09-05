<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class homeController extends Controller
{
    //

//=================3rd clss==================//
// public function sayhello(){

// return "<h2>Hello Bangladesh</h2>";

//   }  
//}


// 	public function sayhello($name){
//       return "<h2>Hello $name!</h2>";
//    }  

//}


//   public function getRange($start,$end){

//   	for($i=$start; $i<=$end; $i++){
//   		echo $i,"<br>";
//   	}
  


//   }  
// }


// public function getform(){

//  return view('form');

//    }
//    public function sum(){
//    	$num1=$_GET['number1'];
//    	$num2=$_GET['number2'];
//    	return $num1+$num2;
//    } 

// }
//=============end================//

//===========4th clss start============//	
	
	// public function getAll(){
	// $fetchData=DB::select("SELECT * FROM students");
	// echo "<pre>";
	// print_r($fetchData);
	// echo "</pre>";
	// }


// public function getinfo($name,$age){
// 	return "<h2>Hello $name!you're $age years old</h2>";
// }


// public function getinfo(Request $r){
// 	echo "<pre>";
// 	print_r($r->all());
// 	echo "</pre>";
// }


// public function getinfo(Request $r){
	
// 	echo $r->name;
// }


// public function getinfo(Request $r){
	
//  	echo $r->input('name');
//  }


 // public function getinfo(Request $r){
	
 // 	$data=$r->all();
 // 	echo $data['name'];
 // }


	// public function getinfo(Request $r){
	
 // 	echo $r->Url(),"<br>";
 // 	echo $r->fullUrl();
 // }


	
// 	public function getinfo(Request $r){
	
//  	echo $r->segment(2),"<br>";
//  		echo $r->segment(3);
//   }

// }
//===========4th clss end============//	
	
//===============5th clss start================//	

// public function getAll(){
// 	$fetchData=DB::select("SELECT * FROM students");
// 	  echo "<pre>";
// 	 print_r($fetchData);
// 	  echo "</pre>";
// 	 }
// 	}


//==============6 clss start============//

// 	public function process(){
// 		return view('showform', $_REQUEST);
// 	}
// }

//==============6 clss end============//

//==============7 clss start============//
// public function getAll(){
// 	$student_info=[
// 	         ["name"=>"taslima", "age"=>20],
// 	         ["name"=>"lima", "age"=>20],
// 	         ["name"=>"fariha", "age"=>20]

// 	];
// 	return view("greeting.greeting", ["students"=>$student_info]);
// }

// }

//==============7 clss end============//

//==============8 clss start============//
// public function process(){
	
// 	$num1=$_REQUEST['number1'];
// 	$num2=$_REQUEST['number2'];
// 	$sum=$num1+$num2;
// 	$info=["num1"=>$num1,"num2"=>$num2,"total"=>$sum];
// 	return view("form.showform", $info);

// }

// }

	// public function process(){
	// 	$num1=$_REQUEST['number1'];
	// 	$num2=$_REQUEST['number2'];
	// 	$sum=$num1+$num2;
	// 	$info=["num1"=>$num1,"num2"=>$num2,"total"=>$sum];
	// 	return view("form.showform",$info);
	// }

	
//==============8 clss end============//
//==============9 clss start============//
public function july14 () {
		$data=DB::select("SELECT * FROM students");
		return view('july14', ["students"=>$data]);
	}
}
//==============9 clss end============//


