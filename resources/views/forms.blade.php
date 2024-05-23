@extends('layout.app')
@section('title', "Create a blog")

@section('content')
<h1>Add a Blog!</h1>
<form action="{{route('blogs.addBlog')}}" method="post">
    <div>
        <label for="author">Author</label>
        <input type="text" name="author">
    </div>
    <div>
        <label for="title">Title</label>
        <input type="text" name="title">
    </div>
    <div>
        <label for="content">Content</label>
        <input type="text" name="content">
    </div>

    <button type="submit">Submit</button>
</form>
@endsection