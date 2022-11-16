@extends('layouts.layout')

@section('content')

<br/><br/>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

      @if($errors->any())
      <div class="error" style="color: rgb(250, 70, 109); text-align: center;">
        @foreach($errors->all() as $errormsg)
        <p>{{ $errormsg }}</p>
        @endforeach
      </div>
      @endif
        <div class="formDiv">
            <form action="/herbs" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" id="formInput" aria-describedby="emailHelp" placeholder="Name of Herb" name="herbName">
                </div>
                <br/>
                <div class="form-group">
                  <label>Region</label>
                  <select class="form-control" id="formInput" name="region">
                    <option value="Africa">Africa</option>
                    <option value="Asia">Asia</option>
                    <option value="North America">North America</option>
                    <option value="South America">South America</option>
                    <option value="Antartica">Antartica</option>
                  </select>
                </div>
                <br/>

                <div class="form-group">
                    <label>Rating</label>
                    <select class="form-control" id="formInput" name="rating">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                  <br/>

                  <div class="form-group">
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Image File</label>
                      <input class="form-control" type="file" id="formFile" name="image">
                    </div>
                  </div>

                
                <br/>
                <div class="form-group">
                    <textarea class="form-control" id="formInput" aria-describedby="emailHelp" placeholder="Synopsis" rows="10" name="synopsis"></textarea>
                  </div>
                  <br/>
                 
                <button type="submit" class="btn btn-primary">Submit</button>

              </form>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
@endsection