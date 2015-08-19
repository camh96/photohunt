@extends('layouts.master')

@section('content')

  <div class="container">
    <h1>{{ ucwords($mission->title) }}</h1>
    <p><img src="{{ asset('images/missions/' . $mission->filename) }}" alt="" class="img-responsive"></p>
    <p>{{ $mission->description }}</p>
  </div>
@endsection