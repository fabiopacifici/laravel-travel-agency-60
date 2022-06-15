@extends('layouts.app')

@section('content')
<div class="p-5 bg-light">
  <div class="container">
    <h1 class="display-3">Our offers</h1>
    <p class="lead">Lorem ipsum dolor sit.</p>
  </div>
</div>

<section class="offers my-4">

  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2">
      @forelse($travel_list as $travel)
      <div class="col">
        <div class="card">
          <span class="badge badge-warning bg-warning">{{$travel->price}}</span>
          <img class="img-fluid" src="{{$travel->image}}" alt="{{$travel->location}}">
          <div class="card-body">
            <h3>{{$travel->location}}</h3>
            <p>
              {{$travel->type}} - {{$travel->days}}
            </p>
          </div>
          <div class="card-footer">
            <a href="{{route('travel.show', $travel->id)}}">Book now</a>
          </div>
        </div>
      </div>
      @empty
      <div class="col">
        <p>No offers sorry!</p>
      </div>
      @endforelse
    </div>
  </div>

</section>

@endsection