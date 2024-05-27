@extends('layouts.master')
@section('content')
<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>All Posts</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end ">
                    <a href="{{route('posts.create')}}" class="btn btn-success">Create</a>
                    <a href="" class="btn btn-warning">Trash</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered border-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="width: 10%;">Image</th>
                    <th scope="col" style="width: 20%;">Title</th>
                    <th scope="col" style="width: 30%;">Description</th>
                    <th scope="col" style="width: 10%;">Category</th>
                    <th scope="col" style="width: 10%;">Publish Date</th>
                    <th scope="col" style="width: 20%;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                  <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="{{asset($post->image)}}" alt="" width="80px">
                    </td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->category_id}}</td>
                    {{-- <td>{{$post->created_at->format('Y-m-d')}}</td> --}}
                    <td>{{date('Y-m-d',strtotime($post->created_at))}}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{route('posts.edit',$post->id)}}">Edit</a>
                        <a class="btn btn-sm btn-danger " href="">Edit</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection