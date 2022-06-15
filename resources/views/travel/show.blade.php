@extends('layouts.app')

@section('content')
<img class="img-fluid" src="{{$travel->image}}" alt="{{$travel->location}}">


<div class="details">
  <h3>{{$travel->location}}</h3>
  <span> <strong>Type: </strong> {{$travel->type}} </span>
  <span> <strong>Days: </strong> {{$travel->days}} </span>
  <span> <strong>Price: </strong> {{$travel->price}}</span>
</div>
  @endsection