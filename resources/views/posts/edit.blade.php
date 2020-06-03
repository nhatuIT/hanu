@extends('layouts.layout')

@section('content')
    
<form action="{{ action('PostController@update', ['post' => $post]) }}" method="POST">
    @method('PUT')
    @include('layouts.form')
    <div>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

@endsection