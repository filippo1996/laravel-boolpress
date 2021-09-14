@extends('layouts.app')

@section('content')

    <!-- start title page -->
    <x-admin.title title="Create new Post"/>
    <!-- end title page -->

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" id="title" aria-describedby="title">
          <div id="emailHelp" class="form-text">Inserisci il titolo</div>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" name="content" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Comments</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> 

@endsection