<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use Illuminate\Http\Request;
use App\Services\EmailService;

class EmailController extends Controller
{
    private $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function sendMail(Request $request)
    {
        $data = $request->only('mensagem', 'email', 'nome');

        return $this->emailService->validateData($data);
    }
}
