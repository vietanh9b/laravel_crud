@extends('layouts.master')
@section('content')
<div class="main-content mt-5">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@endif
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>Edit Posts</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end ">
                    <a href="{{route('posts.index')}}" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <img src="{{asset($post->image)}}" alt="" style="width:200px">
                <div class="form-group">
                    <label for="" class="form-label ">Image</label>
                    <input type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label ">Title</label>
                    <input type="text" class="form-control" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="" class="form-label ">Category</label>
                    <select class="form-control" name="" id="">
                        {{-- <option value="">{{$post->category->name}}</option> --}}
                        @foreach ($categories as $category)
                            <option {{$post->category_id==$category->id ? 'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label ">Description</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control">{{$post->description}}</textarea>
                </div>
                <div class="form-group mt-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection