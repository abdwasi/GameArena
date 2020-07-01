@extends('layouts.app')

@section('title', 'Welcome')

@section('content')


  <table class="table">
    <thead>
      <tr>
        <th scope="col-1">#</th>
        <th scope="col-3">Title</th>
        <th scope="col-6">Last</th>
        <th scope="col-2">Handle</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($posts as $post)
    <tr>
        <th scope="row">{{ $post->post_id }}</th>
        <td>{{ $post->title }}</td>
        <td>{{ $post->content }}</td>
        <td>{{ $post->user_id }}</td>
    </tr>
    @empty
        {{-- <li>No post Avaliable</li> --}}
    @endforelse
</div>
</table>
@endsection
