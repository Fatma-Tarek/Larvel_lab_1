@extends('layouts.app')

@section('title')update Page @endsection

@section('content')
<form method="POST" action="{{route('posts.update',['post'=>$post['id']])}}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="{{$post['title']}}">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" id="description">{{$post['description']}}</textarea>
    </div>
    <div class="form-group">
      <label  for="post_creator">Post Creator</label>
      <textarea class="form-control" id="description">{{$post['posted_by']}} </textarea>
    </div>
    <button type="submit" class="btn btn-success">Update Post</button>
  </form>

@endsection