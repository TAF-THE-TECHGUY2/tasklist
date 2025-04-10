@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <h2>Task List</h2>

    @forelse ($tasks as $task)
        <div>
        <a href="{{ route('tasks.show', ['task' => $task->id]) }}">
                {{ $task->title }}
            </a>
        </div>
    @empty
        <div>There are no tasks!</div>
    @endforelse
@endsection
