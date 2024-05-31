<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $data = Contact::all();
        return view('adminContact', [
            'id' => "id",
            'email' => "email",
            'pengirim' => "pengirim",
            'pesan' => "pesan",
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pengirim' => 'required|max:255',
            'email' => 'required',
            'pesan' => 'required'
        ]);

        Contact::create($validatedData);

        return redirect()->route('posts.create')->with('success', 'Post created successfully.');
    }

    public function create()
    {
        return view('contact');
    }
}
