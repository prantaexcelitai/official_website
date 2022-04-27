@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>Add Product</h1>
        </div>
        <div class="card-body">
            <form action="{{route('insert-product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title">
                        @error('title')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea rows="3" class="form-control" name="description"></textarea>
                        @error('description')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                        @error('image')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label for="">Status</label>
                        <select name="status"class="form-select" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="ongoing">OnGoing</option>
                            <option value="upcoming">upcoming</option>
                            <option value="completed">completed</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
