<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        //$data = Students::all();
        $data = DB::table('students')
        ->select('first_name', 'last_name', 'email')
        ->get();
        ;
        
        return view('students.index', ['students' => $data]);
    }
}
