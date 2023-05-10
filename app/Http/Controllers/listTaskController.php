<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\tasklist;

class listTaskController extends Controller
{
    public function saveTask(Request $request) {

        $newTask = new tasklist;
        $newTask->name = $request->taskList;
        $newTask->is_complete= 0;
        $newTask->save();


        return view('welcome');
    }


}
