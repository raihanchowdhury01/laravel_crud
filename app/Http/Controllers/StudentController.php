<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show()
    {
        $data = DB::table('students')->get();
        return view('welcome', ['details' => $data]);
    }

    public function insert(Request $request)
    {
        $data = DB::table('students')->insert([
            'Name' => $request->name,
            'Roll' => $request->roll,
            'Gender' => $request->fav_language,
            'Age' => $request -> age,
            'District'=> $request -> dist,
            'Phone' => $request -> phone
        ]);
        if ($data){
            echo "Data Inserted!";
        } else {
            echo "Something Wrong!";
        }
    }

    public function index($id)
    {
        $id = DB::table('students')->find($id);
        return view('update', ['data' => $id]);

    }
    public function update_action(Request $request , $id)
    {
        $id = DB::table('students')->where('id', $id)->update([
            'Name' => $request->name,
            'Roll' => $request->roll,
            'Gender' => $request->fav_language,
            'Age' => $request -> age,
            'District'=> $request -> dist,
            'Phone' => $request -> phone
        ]);
        return redirect()->route('h');
    }
   public function delete($id){
    $data = DB::table('students')->where('id', $id)->delete();
    if($data){
        return redirect()->route('h');
    }
   }
    
}
