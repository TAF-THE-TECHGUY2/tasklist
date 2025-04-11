@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset

        <div class="mb-4">
            <label for="title" class="block font-medium mb-1">Title</label>
            <input type="text" name="title" id="title"
                class="w-full border rounded px-3 py-2 @error('title') border-red-500 @enderror"
                value="{{ $task->title ?? old('title') }}">
            @error('title')
                <p class="error-message mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block font-medium mb-1">Description</label>
            <textarea name="description" id="description" rows="5"
                class="w-full border rounded px-3 py-2 @error('description') border-red-500 @enderror">{{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <p class="error-message mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="long_description" class="block font-medium mb-1">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10"
                class="w-full border rounded px-3 py-2 @error('long_description') border-red-500 @enderror">{{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
                <p class="error-message mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="btn">
                @isset($task)
                    Update Task
                @else
                    Add Task
                @endisset
            </button>
            <a href="{{ route('tasks.index') }}" class="link">Cancel</a>
        </div>
    </form>
@endsection
