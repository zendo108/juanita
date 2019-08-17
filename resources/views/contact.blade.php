@extends('layouts.app')

@section('content')
    <h1>Contact</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{ Form::label('name', '') }}
        {{ Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Enter Name']) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', '') }}
        {{ Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'Enter Email']) }}
    </div>
    <div class="form-group">
        {{ Form::label('message', '') }}
        {{ Form::textarea('message', '', ['class'=>'form-control', 'placeholder'=>'Enter Message']) }}
    </div>
    <div>
        {!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection
