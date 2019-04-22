@extends('template')
@section('dashboard')
    {{-- <div class="container-fluid py-4 forms">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Category</h3>
                        </div>
                    </div>

            <div class="row">
                        <div class="col-sm-12">
                            <div class="card border-0">
                                <div class="card-body">
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Icon</label><br/>
                                            <input type="file" name="icon">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div> --}}

    <div class="container-fluid elements py-4 tabs">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Category</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        
                                        <div class="col-sm-12">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-icon" role="tab" aria-controls="home" aria-selected="true"><i class="la la-navicon"></i> Categories</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-icon" role="tab" aria-controls="profile" aria-selected="false"><i class="la la-pencil-square"></i> Create New Category</a>
                                                </li>
                                                
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home-icon" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="col-sm-12">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Description</th>
                                                                <th scope="col">Icon</th>
                                                                <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($categories as $category)
                                                                    <tr>
                                                                        <th scope="row">{{$category->id}}</th>
                                                                        <td>{{$category->name}}</td>
                                                                        <td>{{str_limit($category->description, 25)}}</td>
                                                                        <td>{{$category->image}}</td>
                                                                        <td>
                                                                            <a href="{{url('categories/'.$category->id.'/edit')}}">Edit</a> | 
                                                                            <a href="" style="color:red;">Delete</a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="profile-icon" role="tabpanel" aria-labelledby="profile-tab">
                                                    <form role="form" method="POST" action="{{ action('CategoryController@store') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input name="name" type="text" class="form-control" placeholder="Enter ..." required>
                                                        </div>
                                                        <!-- textarea -->
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea name="description" class="form-control" rows="3" placeholder="Enter ..." required></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Icon</label><br/>
                                                            <input type="file" name="icon" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
