@extends('layout.app')

@section('title')
    Do It!
@endsection

@section('content')
    @include('layout.intro')
    @if ( count( $todos ) > 0 )
        <div class="tasks">
            @foreach($todos as $todo)
                <div class="card">
                    <span class="label label-due">{{ $todo->due }}</span>
                    <h2>{{ $todo->title }}</h2>
                    <p>{{ $todo->content }}</p>
                    <a class="link" href="todos/{{ $todo->id }}"><i class="fas fa-eye"></i>See task</a>
                </div>
            @endforeach
        </div>
    @else
        <div style="width: 100%; text-align: center;">
            You don't have any tasks yet. Try create one! &#128512;
        </div>
    @endif
@endsection
