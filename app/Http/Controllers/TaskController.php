<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->orderBy('name', 'asc')->get();
        // $tasks = Task::all();
        return view('tasks', compact('tasks'));
    }
    public function store(REQUEST $request)
    {
        DB::table('tasks')->insert([
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        /*abject from class Task
          $task=new Task;
          $task->name=$request->name;
          $task->save(); //to insert data*/


        return redirect()->back();
    }
    public function delete($id)
    {
        DB::table('tasks')->where('id', '=', $id)->delete();
        // Task::find($id)->delete();
        return redirect()->back();
    }
    public function show($id)
    {
        $tasks = DB::table('tasks')->where('id', '=', $id)->get();
        return view('update', compact('tasks'));
    }
    public function update(REQUEST $request, $id)
    {
        DB::table('tasks')->where('id', '=', $id)->update([
            'name' => $request->name,
        ]);
        $tasks = DB::table('tasks')->orderBy('name', 'asc')->get();
        return  ;
    }
}
