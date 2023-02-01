<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {

        $allStudentsData = Student::all();
        return view('students.index', [
            'students' => $allStudentsData
        ]);
    }

    public function create() {
        return view('students.create');
    }

    public function store(Request $request) {

        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $student = new Student();
        $student->first_name = $request->firstName;
        $student->last_name = $request->lastName;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();

        flash()->addSuccess('Student Added Successfully');

        return redirect('index');
    }

    public function edit($id) {
        $student = Student::findOrFail($id);

        return view('students.edit', [
            'student' => $student
        ]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $student = Student::findOrFail($id);
        $student->first_name = $request->firstName;
        $student->last_name = $request->lastName;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();

        flash()->addSuccess('Student Updated Successfully');

        return redirect('index');
    }

    public function delete($id) {
        $student = Student::findOrFail($id);
        $student->delete();

        flash()->addSuccess('Student Deleted Successfully');

        return redirect('index');
    }

    public function view($id) {
        $student = Student::findOrFail($id);

        return view('students.view', [
            'student' => $student
        ]);
    }
}
