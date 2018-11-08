@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>

            <div>
              <p>Go to posts <a href="\">Here</a></p>
            <div>

                <form form class="" method="post" action="/posts/{{ $post->id }}">
                  @method('PUT')
                  @csrf
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" id="name" name="name" value="{{ $post->name }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" id="title" name="title" value="{{ $post->title }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="post">Post:</label>
                    <textarea class="form-control"  name="post" rows="5" id="post">{{ $post->post}}</textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
                </form>

        </div>
    </div>
</div>
@endsection
