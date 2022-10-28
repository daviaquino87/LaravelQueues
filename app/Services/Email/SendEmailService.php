<?php

namespace App\Services\Email;

use App\Jobs\SendEmail;
use Illuminate\Support\Facades\Mail;

class SendEmailService
{
    public function sendCredentials($data)
    {
        SendEmail::dispatch($data);
        return response()->json('ok', 200);
    }
}
