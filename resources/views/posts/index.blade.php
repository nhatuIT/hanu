@extends('layouts.layout')

@section('content')

<div>
    <a href="{{ action('PostController@create') }}">
        <button type="button" class="btn btn-primary">Create</button>
    </a>
</div>
<br />
<table class="table table-striped">
    <tr>
        <td>STT</td>
        <td>Title</td>
        <td>Description</td>
        <td>Student ID</td>
        <td>Actions</td>
    </tr>

    @php($i = 1)

    @foreach ($posts as $post)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>{{$post->student_id}}</td>
            <td>
                <a href="{{ action('PostController@edit', ['post' => $post]) }}">
                    <button class="btn btn-warning">Edit</button>
                </a>

                <a href="javascript:void(0)" onclick="document.getElementById('post-delete-{{ $post->id }}').submit()">
                    <button class="btn btn-danger">Delete</button>
                </a>

                <form method="POST" id="post-delete-{{ $post->id }}" action="{{ action('PostController@destroy', ['post'=>$post]) }}">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @php($i++)
    @endforeach
</table>

<style>
    a {
        text-decoration: none;
    }
</style>

@endsection