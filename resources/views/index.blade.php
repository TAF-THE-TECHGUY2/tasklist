@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <!-- Top Navigation -->
    <nav class="mb-6 flex gap-4 items-center">
        <a href="{{ route('tasks.create') }}"
            class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-md font-medium">
            Add Task!
        </a>
    </nav>


    <div class="space-y-4">
        @forelse ($tasks as $task)
                <div>
                    <a href="{{ route('tasks.show', ['task' => $task->id]) }}" @class([

                        'line-through text-gray-500' => $task->completed
                    ])>
                        {{ $task->title }}
                    </a>
                </div>
        @empty
            <div class="p-4 bg-yellow-100 text-yellow-800 rounded">
                There are no tasks!
            </div>
        @endforelse
    </div>


    @if ($tasks->count())
        <div class="mt-6 flex justify-center">
            {{ $tasks->links() }}
        </div>
    @endif
@endsection
