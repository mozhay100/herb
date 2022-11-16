@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="card-home">
                <div class="card-header">{{ __('Welcome') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div id="link-to-create"><a href="/herbs/create" id="home-create">New Herb Article <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
