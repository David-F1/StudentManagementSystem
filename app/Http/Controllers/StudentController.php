<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select all data from model and store in variable
        $students = student::all();

        return view('student',['students'=>$students, 'layout'=>'index']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students=student::all();

        return view('student',['students'=>$students, 'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new student();
        $student->cne = $request->input('cne');
        $student->FirstName = $request->input('FirstName');
        $student->SecondName = $request->input('SecondName');
        $student->age = $request->input('age');
        $student->speciality = $request->input('speciality');
        $student->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = student::find($id);
        $students = student::all();

        return view('student',['students'=>$students, 'student'=>$student, 'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = student::find($id);
        $students = student::all();

        return view('student',['students'=>$students, 'student'=>$student, 'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = student::find($id);
        $student->cne = $request->input('cne');
        $student->FirstName = $request->input('FirstName');
        $student->SecondName = $request->input('SecondName');
        $student->age = $request->input('age');
        $student->speciality = $request->input('speciality');
        $student->save();

        return redirect('/');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::find($id);
        $student->delete();
        return redirect('/');
    }
}
