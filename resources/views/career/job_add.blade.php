@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>Add Job</h1>
        </div>
        <div class="card-body">
            <form action="{{route('insert_career')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Job_Title</label>
                        <input type="text" class="form-control" name="job_tittle">
                        @error('job_tittle')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="text">Vacancy</label>
                        <input type="text" class="form-control"  name="vacancy">
                        @error('vacancy')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Experience</label>
                        <input type="text" class="form-control" name="experience" >
                        @error('experience')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Deadline</label>
                        <input type="text" class="form-control" name="deadline">
                        @error('deadline')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Job_type</label>
                        <select name="job_type"class="form-select" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="Fulltime">Fulltime</option>
                            <option value="Parttime">Parttime</option>
                            <option value="Intern">Intern</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Job_Summary</label>
                        <textarea rows="3" class="form-control" name="job_summary"  id="summernote"></textarea>
                        @error('job_summary')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Role & Responsibilities</label>
                        <textarea rows="3" class="form-control" name="role_responsibilities" id="summernot"></textarea>
                        @error('role_responsibilities')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Minimum Qualification</label>
                        <textarea rows="3" class="form-control" name="minimum_qualification" id="Summernot"></textarea>
                        @error('minimum_qualification')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Additional Qualification</label>
                        <textarea rows="3" class="form-control" name="additional_qualification" id="summerno"></textarea>
                        @error('additional_qualification')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Compensation & Other_benefit</label>
                        <textarea rows="3" class="form-control" name="compensation_other_benefit" id="summern"></textarea>
                        @error('compensation_other_benefit')
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
