@extends('layouts.home',[
  'current_page' => 'edit'
])

@section('content')
    @if (Session::has('success_message'))
        <div class="alert alert-success">
            {{ Session::get('success_message') }}
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
      <h1>{{isset($poll->id)? 'Edit Poll' : 'Create Poll'}}</h1>
      <form action="" method="POST">
        @csrf
        @if (isset($poll->id))
            @method("PUT")
        @endif

        <label for="title">Title:</label> <br>
        <input type="text" name="title" value="{{old('title', $poll->title ?? '')}}"> <br>
        <label for="question">Question:</label> <br>
        <textarea name="question" id="question" cols="30" rows="2">
          {{old('question', $poll->question ?? '')}}
        </textarea>
        <br>
        
      </form>

    </div>
@endsection