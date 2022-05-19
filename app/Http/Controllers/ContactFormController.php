<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
class ContactFormController extends Controller
{
    public function sendmail(Request $request)
    {
        $formdata= [
            'name'=>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'msg' => $request->message,
        ];

        Mail::to('mdsohorab521191@gmail.com')->send(new ContactFormMail($formdata));
        // return back()->with('message-sent','Your message has been Sent Success Fully ');
    }
}
