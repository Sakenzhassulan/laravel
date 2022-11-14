<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUs(Request $request)
    {
        ContactUs::create(
            [
                'name' => $request['name'],
                'email' => $request['email'],
                'company' => $request['company'],
                'info' => $request['info'],
                'type' => $request['type']
            ]
        );
        return response()->json();
    }
}
