@extends('layout.app')

@section('title', "Blog Posts")


@section('content')
<h1 class="text-3xl font-bold">Hello World!</h1>
<p class="text-lg font-semibold text-slate-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eius ducimus consequuntur id est suscipit, doloremque totam corrupti ipsum, esse quasi eos pariatur quae consectetur! Earum labore pariatur vero qui.</p>

<div class="mt-3">
    <a href="#" class="btn-success">Add new blog post!</a>

    <div class="mt-9">
        <p class="font-bold"><a href="#" class="link">Title of the blog post</a></p>
    </div>
</div>
@endsection