@extends('layout.app')

@section('title')
    Do It - Task: {{ $todo->title }}
@endsection

@section('content')
    <div style="margin-bottom: 30px;">
        <a href="/" class="link"> <i class="fas fa-home"></i> Home</a>
    </div>
    <div class="show">
        <span class="label label-danger">{{ $todo->due }}</span>
        <h1>{{ $todo->title }}</h1>
        <p>{{ $todo->content }}</p>
    </div>
@endsection
