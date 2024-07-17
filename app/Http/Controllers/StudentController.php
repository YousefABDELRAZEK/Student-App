<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function index(){
        $students= Student::all();
        return view('students.index',compact('students'));
    }
    public function create(){
        return view('students.create');
    }
    public function store(Request $request){
        $request->validate(['name','course']);
        Student::create($request->all());
        return redirect()->route('students.index')
        ->with('success', 'Student created successfully.');
    }
    public function edit(Student $student){
        return view('students.edit', compact('student'));

    }
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
                         ->with('success', 'Student updated successfully.');
    }
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
                         ->with('success', 'Student deleted successfully.');
    }


}
