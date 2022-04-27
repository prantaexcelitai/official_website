@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>Add Member</h1>
        </div>
        <div class="card-body">
            <form action="{{route('insert-member')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Member_name</label>
                        <input type="text" class="form-control" name="name">
                        @error('name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Designation</label>
                        <input type="text" class="form-control" name="designation">
                        @error('designation')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label for="">Department</label>
                        <select name="department"class="form-select" aria-label="Default select example">
                            <option selected>department</option>
                            <option value="Management">Management</option>
                            <option value="HR">HR</option>
                            <option value="Software Team">Software Team</option>
                            <option value="Business">Business</option>
                            <option value="UI/UX">UI/UX</option>
                            <option value="SQA">SQA</option>
                            <option value="Mob Application">Mob Application</option>
                        </select>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                        @error('image')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Facebook</label>
                        <input type="text" class="form-control" value="	https://www.facebook.com/Excelitai/" name="facebook">
                        @error('facebook')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Twitter</label>
                        <input type="text" class="form-control" value="https://twitter.com/excel_it_ai" name="twitter">
                        @error('twitter')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Instagram</label>
                        <input type="text" class="form-control" value="https://www.instagram.com/excelitai/" name="instagram">
                        @error('instagram')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Linkedin</label>
                        <input type="text" class="form-control" value="https://bd.linkedin.com/company/excelita" name="linkedin">
                        @error('linkedin')
                            <div class="text-danger mt-1">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
