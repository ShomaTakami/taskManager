<?php

// app/Http/Controllers/TaskController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the user's tasks.
     */
    public function index()
    {
        $tasks = auth()->user()->tasks()->paginate(12);
        return view('tasks.index', compact('tasks'));
    }

    public function archive(Request $request)
    {
        $id = $request->id;
        Task::find($id)->delete();
//TODO カードエリアだけレンダリングすれば？　今ページネーションとかも含めてるからおかしくなってる
        $tasks = auth()->user()->tasks()->paginate(12);
        $html = view('tasks.index', compact('tasks'))->render();

        return response()->json(['success' => true, 'html' => $html]);
    }
}
