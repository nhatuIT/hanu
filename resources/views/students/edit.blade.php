@extends('layouts.layout')

@section('content')
    
<form action="{{ action('StudentController@update', ['student' => $student]) }}" method="POST">
    @method('PUT')
    @include('layouts.form')
    <div>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

@endsection