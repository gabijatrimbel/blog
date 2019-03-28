@extends('layouts.storage')

@section('title', 'Failu saugykla')

@section('content')

<div class="row">

  @forelse ($files as $file)
  <div class="col-6">
    <div class="card {{ $loop->first  ? 'bg-primary' : ''}}">
      <div class="card-body">
        <h2>{{ $file['filename']}}</h2>
        <small>{{ $file['size']}}</small>
        <div>
          {{ $file['created_at']}}
        </div>
      </div>
    </div>

  </div>


@empty
 nera failu
 @endforelse
</div>
@endsection
