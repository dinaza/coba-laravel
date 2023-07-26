@extends('layouts.main')

@section('container')

    <h2>{{ $post['title'] }}</h2>
    <h5>By : {{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>

    <a href="/blog">Go Back</a>
@endsection