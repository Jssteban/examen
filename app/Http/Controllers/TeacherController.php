<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teachers = Teacher::all();
        return view('index', compact('teachers'));
    }
    public function store(Request $request){
        Teacher::create($request->except('_token'));
        return to_route('teacher.index');
    }

    public function update(Request $request,$id){
        Teacher::find($id)->update($request->except('_token'));
        return to_route('teacher.index');
    }

    public function destroy($id){
        Teacher::destroy($id);
        return to_route('teacher.index');
    }
}
