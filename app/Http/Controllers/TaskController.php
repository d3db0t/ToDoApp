<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function add(){
        return view('addTask');
    }
    public function edit(){
        return view('editTask');
    }
    public function delete(){
    }
}
