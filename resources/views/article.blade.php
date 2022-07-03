@extends('master')
@section('content')
<div id="div1">
<main>
    <div id="div6">
    <h2 style="margin-top:0; text-align:center; color:white; background-color:rgb(18, 23, 94); padding:3%"> {{$item ->title}} </h2>
    <div>
        <img src="{{ asset($item->img) }}" width="100%" style="margin-top:0">
    </div>
    <div>
        <p>{{ $item->body }}</p>
    </div>
    </div>
</main>
@endsection
