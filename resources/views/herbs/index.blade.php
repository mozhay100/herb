@extends('layouts.layout')

@section('content')
<br/><br/>
<div class="row">
    @foreach($herbs as $allHerbItem)
    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top img-fluid" src="/img/{{ $allHerbItem->img_url }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $allHerbItem->name }}</h5>
              <p class="card-text">{{ Str::limit($allHerbItem->synopsis, 50) }}</p>
              <div class="cardButton">
                <a href="/herbs/show/{{ $allHerbItem->id }}" class="btn btn-outline-primary btn-right">Explore <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
              </div>
              
            </div>
          </div>
    </div>
    @endforeach

    <div class="paginationLink">
      <p>
      {{ $herbs->onEachSide(1)->links() }}
      </p>
    </div>

    
</div>

@endsection

