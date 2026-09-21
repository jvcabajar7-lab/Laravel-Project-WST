<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Display all tasks (Read)
    public function index()
    {
        $tasks = Task::orderBy('due_date', 'asc')->get();
        return view('tasks.index', compact('tasks'));
    }

    // Save a new task (Create)
    public function store(Request $request)
    {
        $request->validate([
            'task_name' => 'required|max:255',
            'due_date'  => 'nullable|date',
        ]);

        Task::create([
            'task_name'   => $request->task_name,
            'description' => $request->description,
            'status'      => 'Pending',
            'due_date'     => $request->due_date,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task added successfully!');
    }

    // Update an existing task details (Update)
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'task_name' => 'required|max:255',
            'due_date'  => 'nullable|date',
        ]);

        $task->update([
            'task_name'   => $request->task_name,
            'description' => $request->description,
            'due_date'     => $request->due_date,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    // Toggle Task Status between Pending / Completed (Update Status)
    public function toggleStatus(Task $task)
    {
        $newStatus = ($task->status === 'Pending') ? 'Completed' : 'Pending';
        $task->update(['status' => $newStatus]);

        return redirect()->route('tasks.index')->with('success', 'Task status updated!');
    }

    // Delete a task (Delete)
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}