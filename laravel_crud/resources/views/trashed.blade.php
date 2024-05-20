@extends('layouts.master')
@section('content')
<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>Trashed Posts</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end ">
                    <a class="btn btn-success">Back</a>
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
                  <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="https://picsum.photos/200" alt="" width="80px">
                    </td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. imilique odit neque ad quasi nisi hic asperiores perspiciatis?</td>
                    <td>News</td>
                    <td>20-5-2024</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="">Edit</a>
                        <a class="btn btn-sm btn-danger " href="">Edit</a>
                    </td>
                  </tr>
                  
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection