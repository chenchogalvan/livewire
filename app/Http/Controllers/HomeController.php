<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Notifications\ContactFormNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    public function postContact(ContactRequest $request)
    {
        Notification::route('mail', 'alfredo.galvan@justia.com')
            ->notify(new ContactFormNotification($request->only(['name', 'email', 'question'])));

        return back()->withMessage('Email successfully sent');
    }

    public function submit(ContactRequest $request)
    {
        Notification::route('mail', 'alfredo.galvan@justia.com')
                    ->notify(new ContactFormNotification($request->only(['name', 'email', 'question'])));

        return response()->noContent();
    }
}
