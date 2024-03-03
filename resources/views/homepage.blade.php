@extends('layouts.home',[
  'current_page'=>'home'
])

@section('content')
    <h1>Welcome 
    @auth
        {{ auth()->user()->name }}
    @endauth
    </h1>

    <h3>Create or join polls by login!</h3>

    @auth
    <a href="{{ route('poll.edit') }}" class="create-poll-link">CREATE POLL</a>
    @endauth
    
@endsection

