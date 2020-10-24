@extends('layout.app')

@section('title')
    Do It - Task: {{ $todo->title }}
@endsection

@section('content')
    <div style="margin-bottom: 30px;">
        <a href="/" class="button" type="submit"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    <div class="show">
        <span class="label label-due">{{ $todo->due }}</span>
        <h1>{{ $todo->title }}</h1>
        <p>{{ $todo->content }}</p>
        <div style="margin-top: 30px;">
            <a href="/todos/{{ $todo->id }}/edit" class="link" style="margin-right: 30px;"> <i class="fas fa-edit"></i> Edit task  </a>
            <form style="display: inline;" action="/todos/{{ $todo->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="link danger"> <i class="fas fa-trash"></i> Delete task  </button>
            </form>
        </div>
    </div>
@endsection
