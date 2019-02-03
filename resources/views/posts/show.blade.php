@extends('layouts.app')
@section('content')
<h1>{{$post->title}}</h1>
<small>writ on :{{$post->created_at}}</small>
<div>
    {!!$post->body!!}
</div>
<a href="/home" class="btn btn-primary">Go back</a>
@endsection