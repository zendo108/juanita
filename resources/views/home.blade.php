@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur commodi eos esse expedita illum laboriosam laborum, maiores modi natus necessitatibus, nihil porro provident quasi quisquam repudiandae tenetur. Saepe, unde.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection
