<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;

use App\AdminModel;

class AdminController extends Controller
{
    public function create(Request $request)
    {
    $admin= new AdminModel();
    $admin->FName =$request->input('FName');
    $admin->LName =$request->input('LName');
    $admin->Email =$request->input('Email');
    $admin->Sex =$request->input('Sex');
    $admin->Age =$request->input('Age');
    $admin->Address =$request->input('Address');

    $admin->save();
    return response()->json($admin);
    }
//to show 
    public function show()
    {
        $admin=AdminModel::all();
        return response()->json($admin);
    }

    public function showbyid($id)
    {
        $admin=AdminModel::find($id);
        return response()->json($admin);
    }
    //to delete
    public function deletebyid(Request $request,$id)
    {
        $admin= AdminModel::find($id);
        $admin->delete();
        return response()->json($admin);
        }
        //to update
        public function updatebyid(Request $request,$id)
        {
            $admin=AdminModel::find($id);
            $admin->FName=$request->input('FName');
            $admin->LName=$request->input('LName');
            $admin->Email=$request->input('Email');
            $admin->Sex=$request->input('Sex');
            $admin->Age=$request->input('Age');
            $admin->Address=$request->input('Address');
            $admin->save();
            return response()->json($admin);
        }


}
