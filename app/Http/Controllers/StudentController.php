<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
        // dd('1');
        $students = Student::all();

        return view('students.index', compact('students')); 
    }

    public function create()
    {
        $student = new Student();
        return view('students.create', compact('student'));
    }

    /**
     * Store post
     */
    public function store(Request $request)
    {
        $request-> validate([
            'name'=> 'required',
            'email'=> 'required'
        ]);
        Student::create($request->input());
        // return 
        return redirect()->action('StudentController@index');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request-> validate([
            'name'=> 'required',
            'address'=> 'required'
        ]);
        $student->update($request->input());
        return redirect()->action('StudentController@index');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->action('StudentController@index');
    }
}