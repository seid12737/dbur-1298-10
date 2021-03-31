<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Studentscontroller;
use App\Studentsmodel;

class Studentscontroller extends Controller
{
    public function create(Request $request)
    {
    $students= new Studentsmodel();
    $students->FName =$request->input('FName');
    $students->LName =$request->input('LName');
    $students->Email =$request->input('Email');
    $students->Sex =$request->input('Sex');
    $students->Age =$request->input('Age');
    $students->Class =$request->input('Class');
    $students->Section =$request->input('Section');

    $students->save();
    return response()->json($students);
    }
    //to show 
    public function show()
    {
        $students=Studentsmodel::all();
        return response()->json($students);
    }

    public function showbyid($id)
    {
        $students=Studentsmodel::find($id);
        return response()->json($students);
    }
    //to delete
    public function deletebyid(Request $request,$id)
    {
        $students= Studentsmodel::find($id);
        $students->delete();
        return response()->json($students);
        }
        //to update
        public function updatebyid(Request $request,$id)
        {
            $students=Studentsmodel::find($id);
            $students->FName=$request->input('FName');
            $student->LName=$request->input('LName');
            $students->Email =$request->input('Email');
            $students->Sex=$request->input('Sex');
            $students->Age=$request->input('Age');
            $students->Class=$request->input('Class');
            $students->Section=$request->input('Section');
            $students->save();
            return response()->json($students);
        }
}
