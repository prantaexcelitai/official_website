<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $career = Career::all();
        return view('career.index',compact('career'));
    }
    public function add()
    {
        return view('career.job_add');
    }
    public function insert(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'job_tittle' => 'required|max:255',
            'vacancy' => 'required|max:255',
            'experience' => 'required|max:255',
            'deadline' => 'required|max:255',
            'job_type' => 'required|max:255',
            'job_summary' => 'required|max:1000',
            'role_responsibilities' => 'required|max:1000',
            'minimum_qualification' => 'required|max:1000',
            'additional_qualification' => 'required|max:2000',
            'compensation_other_benefit' => 'required|max:2000',
        ]);
        $career = new Career();

        $career->job_tittle = $request->input('job_tittle');
        $career->vacancy = $request->input('vacancy');
        $career->experience = $request->input('experience');
        $career->deadline = $request->input('deadline');
        $career->job_type = $request->input('job_type');
        $career->job_summary = $request->input('job_summary');
        $career->role_responsibilities = $request->input('role_responsibilities');
        $career->minimum_qualification = $request->input('minimum_qualification');
        $career->additional_qualification = $request->input('additional_qualification');
        $career->compensation_other_benefit = $request->input('compensation_other_benefit');

        $career->save();
        return redirect('career')->with('status',"Job-Post Added Successfully");
    }
    public function edit($id)
    {
        $career = Career::find($id);
        return view('career.job_edit',compact('career'));
    }
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'job_tittle' => 'required|max:255',
            'vacancy' => 'required|max:255',
            'experience' => 'required|max:255',
            'deadline' => 'required|max:255',
            'job_type' => 'required|max:255',
            'job_summary' => 'required|max:1000',
            'role_responsibilities' => 'required|max:1000',
            'minimum_qualification' => 'required|max:1000',
            'additional_qualification' => 'required|max:2000',
            'compensation_other_benefit' => 'required|max:2000',

        ]);
        $career = Career::find($id);

        $career->job_tittle = $request->input('job_tittle');
        $career->vacancy = $request->input('vacancy');
        $career->experience = $request->input('experience');
        $career->deadline = $request->input('deadline');
        $career->job_type = $request->input('job_type');
        $career->job_summary = $request->input('job_summary');
        $career->role_responsibilities = $request->input('role_responsibilities');
        $career->minimum_qualification = $request->input('minimum_qualification');
        $career->additional_qualification = $request->input('additional_qualification');
        $career->compensation_other_benefit = $request->input('compensation_other_benefit');

        $career->save();
        return redirect('career')->with('status',"Job-Post Updated Successfully");
    }
    public function destroy($id)
    {
        $career = Career::find($id);
        $career->delete();
        return redirect('career')->with('status',"Job_Post deleted Successfully");
    }
}
