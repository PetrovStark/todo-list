@extends('layout.app')

@section('content')
    <div class="intro">
        <h1>New Task</h1>
        <p>Create a new task</p>
    </div>
    <form class="create" method="post" action="/todos">
        @csrf
        <div style="margin-bottom: 30px;">
            <a href="/" class="link"> <i class="fas fa-home"></i> Home</a>
        </div>
        <label for="title">Title</label>
        <input class="input" type="text" name="title" placeholder="Ex: Wash the dishes" value="{{ old('title') }}">
        <label for="content">Content</label>
        <textarea class="input textarea" style="resize: none;" name="content" placeholder="Ex: Wash all the dishes of the sink.">{{ old('content') }}</textarea>
        <label for="due">Due</label>
        <input class="input" type="text" name="due" placeholder="Ex: Next monday, at 9 PM" value="{{ old('due') }}">
        <button class="button" type="submit">Create task</button>
    </form>
@endsection
