@extends('layouts.app')

@section('title', 'Irasai')

@section('content')
Viso irasu: {{ count($posts)}}

<div class="row">

  @forelse ($posts as $post)
  <div class="col-6">
    <div class="card {{ $loop->first  ? 'bg-primary' : ''}}">
      <div class="card-body">
        <h2>{{ $post['title']}}</h2>
        <small>{{ $post['time']}}</small>
        <div>
          {{ $post['content']}}
        </div>
      </div>
    </div>

  </div>

@empty
 nera irasu
 @endforelse
</div>
@endsection
