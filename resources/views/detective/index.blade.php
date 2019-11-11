@extends('layouts/layout')

@section('content')

    <h1>The detectives list</h1>

    @foreach ($detectives as $detective)

        <h2>{{ $detective->name }}</h2>
        <br>
        <p><strong>Story:</strong> {{ $detective->history }}</p>
        <br>
        
    @endforeach

    

@endsection