@extends('layouts.app')

@section('content')
    <h1>Messages</h1>
    @if(count($messages)>0)
        <div class="card-group">
        @foreach($messages as $message)
            <div class="card">
              <div class="card-header">
                {{$message->name}}
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>{{$message->message}}</p>
                  <footer class="blockquote-footer">Email <cite title="Source Title">{{$message->email}}</cite></footer>
                </blockquote>
              </div>
            </div>
        @endforeach
        </div>
    @endif
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection
