@extends('layouts.app')

@section('content')
    <h1>Messages</h1>
    @if(count($mesagges)>0)
        @foreach($messages as $message)
            <ul class="list-group">
                <li class="list-group-item">{{$message->name}}</li>
                <li class="list-group-item">{{$message->email}}</li>
                <li class="list-group-item">{{$message->message}}</li>
            </ul>
    @endif
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection
