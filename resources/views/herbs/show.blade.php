@extends('layouts.layout')

@section('content')

<br/><br/><br/>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                @foreach ($thisherbItem as $herb)
                    <div class="col-md-4">
                        <br/>
                        <img src="/img/{{ $herb->img_url }}" class="img-fluid rounded" alt="Responsive image" height="400px" width="400px"/>
                    </div>
                    <div class="col-md-8">
                        <p><h3><b>{{ $herb->name }}</b></h3></p>
                        <p>{{ $herb->synopsis }}</p>
                    </div>
                @endforeach
            </div>

            <br/><br/>
            <a href="/herbs"><button class="btn btn-outline-primary"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</button></a>
        </div>
        <div class="col-md-2 ">
            <br/>
            <div class="showLastCol">
            @if(Auth::check()) 
            <form action="/herbs/{{ $herb->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-primary">Delete</button>
            </form>
                
            @endif
            </div>
        </div>
    </div>


        
    

@endsection