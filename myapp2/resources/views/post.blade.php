@extends('layout')

@section('content')
    <h1>{!! $wpost->titl !!}</h1>
    <article>
        {!! $wpost->excepts !!}
    </article>
    <a href="/posts">Go back</a>
@endsection