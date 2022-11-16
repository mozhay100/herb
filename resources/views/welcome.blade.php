@extends('layouts.layout')

@section('content')
    
<div class="welcomeContent">
    <img src="/img/leaf.png"/>

    <ul>
        <li>Cinnamon</li>
        <li>Sage</li>
        <li>Pepper Mint</li>
        <li>Turmerric</li>
        <li>Cayenne Pepper</li>
    </ul>

    <p>{{ session('msg') }}</p>
    <p>Let me be your herbalist</p>

    <a href="/herbs">Take me to herbs <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
</div>



@endsection