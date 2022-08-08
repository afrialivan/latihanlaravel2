@extends('layouts.main')

@section('container')
    

<form action="/create" method="POST">
  @csrf
  <div class="mb-3">
    <label for="judul" class="form-label">Judul</label>
    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" aria-describedby="judulHelp">
    @error('judul')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">slug</label>
    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" aria-describedby="slugHelp">
    @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">body</label>
    <input type="text" name="body" class="form-control @error('body') is-invalid @enderror" id="body" aria-describedby="bodyHelp">
    @error('body')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection 