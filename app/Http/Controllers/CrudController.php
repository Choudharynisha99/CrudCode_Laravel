<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Code;

class CrudController extends Controller

{
    //
    function add(Request $request){
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $imgName = time() . '.' . $ext;
        $file->move(public_path('uploads/dummy'), $imgName);
        $student = new Code();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->image = $imgName;
        $student->save();
        if($student){
            return redirect('list');
        }
        else{
            return "failed  to add";
        }

    }

    function list(){
     $studentData = Code::all();
     return view('datacollection',['data'=>$studentData]);
    }
    
    function delete($id){
        $isDeleted = Code::destroy($id);
        if($isDeleted){
               return redirect('list');
        }

    }

    function edit($id){
        $studentEdit = Code::find($id);
        return view('updatedata',['edit'=>$studentEdit]);
    }
    
    function editStudent(Request $request, $id){
        $studentUpdate = Code::find($id); 
        File::delete(public_path('uploads/dummy'.$studentUpdate->image));
        $file1 = $request->file('file');
        $ext1 = $file1->getClientOriginalExtension();
        $imgName1 = time() . '.' . $ext1;
        $file1->move(public_path('uploads/dummy'), $imgName1);
        $studentUpdate->name = $request->name;
        $studentUpdate->email = $request->email;
        $studentUpdate->password = $request->password;
        $studentUpdate->image = $imgName1;
        if($studentUpdate->save()){
            return redirect('list');
        }
        else{
            return "fail to update";
        }
    }

    function search(Request $request){
         $studentSearch = Code::where('name','like',"%$request->search%")->get();
         return view('datacollection',['data'=>$studentSearch, 'search'=>$request->search]);
    }
}

