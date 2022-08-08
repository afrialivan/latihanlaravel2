@extends('layouts.main')

@section('container')

<div class="row">

  @foreach ($posts as $post)
  <div class="col-lg-4">
    <div class="card" style="width: 14rem;">
      <div class="card-body">
        <h5 class="card-title">{{ $post->judul }}</h5>
        <p class="card-text">{{ $post->body }}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  @endforeach
</div>


@endsection