<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Task Manager</title>
    <!-- Simple Vanilla CSS styling -->
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f6f9; margin: 0; padding: 20px; }
        .container { max-width: 900px; margin: 0 auto; background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h1 { margin-top: 0; color: #333; }
        .alert { background: #d4edda; color: #155724; padding: 10px; border-radius: 4px; margin-bottom: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], textarea, input[type="date"] { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { background: #007bff; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0056b3; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f8f9fa; }
        .badge { padding: 4px 8px; border-radius: 4px; font-size: 12px; color: white; }
        .badge-pending { background: #ffc107; color: #000; }
        .badge-completed { background: #28a745; }
        .actions { display: flex; gap: 5px; }
        .btn-status { background: #17a2b8; }
        .btn-delete { background: #dc3545; }
    </style>
</head>
<body>

<div class="container">
    <h1>Personal Task Manager</h1>

    <!-- Success Flash Message -->
    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <!-- Add Task Form -->
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="task_name">Task Name *</label>
            <input type="text" id="task_name" name="task_name" required placeholder="e.g., Complete WST Assignment">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="2" placeholder="Task details..."></textarea>
        </div>

        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" id="due_date" name="due_date">
        </div>

        <button type="submit">Add Task</button>
    </form>

    <hr style="margin: 30px 0;">

    <h2>Task List</h2>

    <!-- Tasks Table -->
    <table>
        <thead>
            <tr>
                <th>Task</th>
                <th>Description</th>
                <th>Status</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tasks as $task)
                <tr>
                    <td><strong>{{ $task->task_name }}</strong></td>
                    <td>{{ $task->description ?? 'N/A' }}</td>
                    <td>
                        <span class="badge {{ $task->status === 'Completed' ? 'badge-completed' : 'badge-pending' }}">
                            {{ $task->status }}
                        </span>
                    </td>
                    <td>{{ $task->due_date ? date('M d, Y', strtotime($task->due_date)) : 'No deadline' }}</td>
                    <td class="actions">
                        <!-- Update Status Button -->
                        <form action="{{ route('tasks.toggleStatus', $task->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn-status">
                                {{ $task->status === 'Pending' ? 'Mark Done' : 'Mark Pending' }}
                            </button>
                        </form>

                        <!-- Delete Task Button -->
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Delete this task?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center;">No tasks found. Add one above!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>