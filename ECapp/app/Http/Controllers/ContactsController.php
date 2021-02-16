<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone_number = $request->input('phone_number');
        $sex = $request->input('sex');
        $content = $request->input('content');
        return view('contacts.confirm' ,compact('name', 'email', 'phone_number', 'sex', 'content'));
    }

    public function complete(Request $request)
    {
        $contact = new contacts();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->tel = $request->input('phone_number');
        $contact->gender = $request->input('sex');
        $contact->contents = $request->input('content');
        $contact->user_id = Auth::user()->id;

        $contact->save();

        // メール送信
        //Mail::to($input['email'])->send(new ContactMail('mails.contact', 'お問い合わせありがとうございます', $input));


        return view('contacts.complete');
    }
}
