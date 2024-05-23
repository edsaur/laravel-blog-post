@extends('layout.app')
@section('title', "Blog #$blog->id | $blog->title")

<h1 class="text-3xl font-semibold">{{$blog->title}}</h1>
<h2 class="text-slate-500">Posted by {{$blog->author}}  | {{$blog->created_at->diffForHumans()}}</h2>
<div class="mt-5">
    <p>{{$blog->content}}</p>
</div>

@section('content')
@endsection