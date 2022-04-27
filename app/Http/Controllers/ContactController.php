<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        return view('contact.index',compact('contact'));
    }
    public function add()
    {
        return view('contact.contact_add');
    }
    public function insert(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|max:500',
            'subject' => 'required|max:500',
            'message' => 'required|max:1000',

        ]);
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        // $contact->status = $request->input('status');
        $contact->save();
        return redirect('contact')->with('status',"Contact Added Successfully");
    }
    public function view($id)
    {
        $contact = Contact::find($id);
        $contact->status = 1;
        $contact->save();
        return view('contact.view_message',compact('contact'));
    }
}
