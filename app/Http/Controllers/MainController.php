<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
      return view('pages.main');
    }
    public function footerform(Request $request)
    {
       $data= array(
      'name_f' => request('name_f'),
      'email' => request('email'),
      'phone' => request('phone'),
      );
       \Mail::send('email.mail2', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN');
        $message1->from($data['email'], $data['name_f'], $data['phone']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
      return back();
    }
}