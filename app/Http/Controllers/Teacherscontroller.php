<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;     
use App\Http\Controllers\Teacherscontroller;
use App\Teachersmodel;

class Teacherscontroller extends Controller
{
    public function create(Request $request)
    {
    $teachers= new Teachersmodel();
    $teachers->FName =$request->input('FName');
    $teachers->LName =$request->input('LName');
    $teachers->Sex =$request->input('Sex');
    $teachers->Age =$request->input('Age');
    $teachers->Email =$request->input('Email');
    $teachers->Staffnumber =$request->input('Staffnumber');

    $teachers->save();
    return response()->json($teachers);
    }
    //to show 
    public function show()
    {
        $teachers=Teachersmodel::all();
        return response()->json($teachers);
    }

    public function showbyid($id)
    {
        $teachers=Teachersmodel::find($id);
        return response()->json($teachers);
    }
    //to delete
    public function deletebyid(Request $request,$id)
    {
        $teachers= Teachersmodel::find($id);
        $teachers->delete();
        return response()->json($teachers);
        }
        //to update
        public function updatebyid(Request $request,$id)
        {
            $teachers=Teachersmodel::find($id);
            $teachers->FName=$request->input('FName');
            $teachers->LName=$request->input('LName');
            $teachers->Sex=$request->input('Sex');
            $teachers->Age=$request->input('Age');
            $teachers->Email=$request->input('Email');
            $teachers->Staffnumber=$request->input('Staffnumber');
            $teachers->save();
            return response()->json($teachers);
        }
}
