@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>Edit Product</h1>
        </div>
        <div class="card-body">
            <form action="{{route('update_prod',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-8">
                    <div class="col-md-12 mb-3">
                        <label for="">Title</label>
                        <input type="text" value="{{$product->title}}" class="form-control" name="title">
                        @error('title')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea rows="3"  class="form-control" name="description">{{$product->description}}</textarea>
                        @error('description')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    @if($product->image)
                        <img src="{{asset('assets/uploads/product/'.$product->image)}}" class= "cate-image"  alt="product image">
                    @endif
                    <div class="col-md-12 mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                        @error('image')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label for="">Status</label>
                        <select name="status"class="form-control" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="ongoing"{{ $product->status == 'ongoing' ? 'selected' : '' }}>OnGoing</option>
                            <option value="upcoming"{{ $product->status == 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                            <option value="completed" {{ $product->status == 'completed' ? 'selected' : '' }}>completed</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>

@endsection
