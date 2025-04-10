@extends('layouts.app')

@section('title', 'Add Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0. 8rem;
        }
    </style>
@endsection

@section('content')
    {{$errors}}
    <form method="Post" action="{{route('tasks.update' , ['task' => $task ->id]) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">
                Title
            </label>
            <input text="text" name="title" id="title" value="{{$task->title}}"/>
            @error('title')
                <p class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="description">Description </label>
            <textarea name="description" id="description" rows="5">value="{{$task->description}}</textarea>
            @error('description')
                <p class="error-message ">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="long_description">Description </label>
            <textarea name="long_description" id="long_description" rows="10">value="{{$task->long_description}}</textarea>
            @error('long_description')
                <p class="error-message">{{$message}}</p>
            @enderror
        </div>
        <div>
            <button type="submit">Edit task </button>
        </div>
    </form>
@endsection

