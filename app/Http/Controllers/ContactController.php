<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        // Data untuk email
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // Kirim email
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('emotionera45@gmail.com') // Ganti dengan email tujuanmu
                    ->subject($data['subject']);
        });

        // Redirect dengan pesan sukses
        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
