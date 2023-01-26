<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $student= Student::get();
        return view('student', ['student'=>$student]);
    }
    public function create(){
        return view('newstudent');
    }
    public function store(Request $request){
        $student = new Student;
        $student->name= $request->name;
        $student->save();
        return redirect('/student');
    }
}
