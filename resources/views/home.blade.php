@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid mt-5">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($data as $record)
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">{{ $record->title }}</h5>
          <p class="card-text">{{ Str::limit(strip_tags($record->content), 20, '...') }} 
        <a  href="{{ url('articles/' . $record->id) }}">Read More</a></p>
        </div>
        <div class="card-footer">
          <small class="text-muted">{{ $record->author}}</small>
        </div>
        <a href="{{ url('/articles/update/' . $record->id) }}" class="btn btn-primary ">Edit</a>
        <a href="{{ url('/articles/delete/' . $record->id) }}" class="btn btn-danger mt-2">Delet</a>
        </a>
      </div>
    </div>
    @endforeach
  </div>
</div>


@endsection