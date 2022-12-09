<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class MainController extends Controller
{
    public function add_contact(Request $request){
        Contact::create(['name'=>$request->name,
                         'email'=>$request->email,
                         'phone_number'=>$request->phone_no,
                         'services'=>$request->services,
                         'message'=>$request->message
                       ]);
        return redirect('contact');
    }
}
