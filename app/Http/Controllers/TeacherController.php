<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
     // Method untuk menampilkan halaman index
     public function index()
     {
         return view('teacher.index'); // Menampilkan file Blade 'teacher/index.blade.php'
     }
}
