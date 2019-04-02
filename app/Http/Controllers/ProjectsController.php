<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\course;
use App\Http\Controllers\Controller;
class ProjectsController extends Controller
{
    //


   public function store()
    {
        
    	request()->validate(['phone'=>['required','min:10']]);
                   
         $student=new student();
   

            $student->name=request('name');
            $student->address=request('address');
            $student->rollno=request('rollno');
            $student->age=request('age');
            $student->email=request('email');
            $student->comments=request('comments');
            $student->course=request('course');
            $student->state=request('state');
            $student->gender=request('gender');
            $student->phone=request('phone');
     
        $student->save();
  $st=\App\student::all();
        
return view('/registered',compact('st'));

}


public function refresh()
{
    $cours=\App\course::all();
      $cour=\App\course::all();  
        return view('welcome',compact('cours'),compact('cour'));
}


public function destroy($id){
   
    $student=\App\student::find($id)->delete($id);
  
    return response()->json([
        'success' => 'Record deleted successfully!'
    ]);
}


public function update($id)
{
$student=student::find($id);


         $student->name=request('name');
            $student->address=request('address');
            $student->rollno=request('rollno');
            $student->age=request('age');
            $student->email=request('email'); 
            $student->comments=request('comments');
            $student->gender=request('gender');
            $student->phone=request('phone');

        $student->save();
        return view('/home',compact('cours'));

      
}

public function edit($id)
{
    $cours=student::find($id);
 

    return view('/link',compact('cours'));
}

}