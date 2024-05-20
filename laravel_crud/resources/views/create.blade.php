@extends('layouts.master')
@section('content')
<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>Create Posts</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="form-label ">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="" class="form-label ">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="" class="form-label ">Category</label>
                    <select class="form-control" name="category_id" id="">
                        <option value="">test1</option>
                        <option value="">test2</option>
                        <option value="">test3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group mt-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection