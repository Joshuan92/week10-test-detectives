@extends('layouts/layout')

@section('content')
<div class="page page-detective">

    <div class="info">

        <img class="portrait" src="{{ asset('img/'.$detective->slug.'.jpg') }}" alt="">

        <div class="data">
            <h1>{{ $detective->name }}</h1>

            <div class="story">
                {!! nl2br($detective->story) !!}
            </div>
        </div>

        <div class="service">
            <h2>Availability</h2>
            From {{ date('g:i A', strtotime($detective->available_from)) }} to {{ date('g:i A', strtotime($detective->available_until)) }}.

            <div class="status unavailable">Current status: <span>Not available</span></div>
        </div>

    </div>

    <div class="detective-assign">
        <h2>Hire a detective</h2>

        <form action="{{ action('DetectiveController@storeCrime') }}" method="post">

            @csrf
            <input type="text" name="subject" placeholder="What crime has been commited?">
            <br>

            <input type="number" name="customer" placeholder="What is your customer no.?" min="1" max="9"> 
            <br>

            <textarea name="description" placeholder="Thorough description"></textarea>
            <br>

            <input type="submit" value="Hire">
        </form>
    </div>

</div>
@endsection
