<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tasks = Task::all();
        $tasks = Task::whereNotIn('completed', ['1'])->get();
        return view('index', compact('tasks'));
    }

    public function finished()
    {
        $tasks = Task::whereNotIn('completed', ['0'])->get();
        return view('finished', compact('tasks'));     
    }

    public function trashed()
    {
        $tasks = Task::onlyTrashed()->get();
        return view('trash', compact('tasks'));
    }

    public function forcedelete($id)
    {
        $task = Task::withTrashed()->findOrFail($id);
        $task->forceDelete();
        FacadesSession::flash('message', 'Task Removed');
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $inputs = $request->all();
        
        Task::create($inputs);

        $request->session()->flash('message', 'Task Added!!');

        return redirect(route('home'));
    }

    public function markAsFinished(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $input['completed_on'] = $request->completed_on;

        $task->update([
            'completed' => 1,
            'completed_on' => $input['completed_on']
        ]);

        $request->session()->flash('message', 'Task Finished');
        return redirect(route('home'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        FacadesSession::flash('message', 'Task Removed');
        return back();
    }
}
