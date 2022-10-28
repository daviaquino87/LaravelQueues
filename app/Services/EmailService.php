<?php

namespace App\Services;

use App\Services\Email\SendEmailService;
use Validator;

class EmailService
{
    private $sendEmailService;

    public function __construct(SendEmailService $sendEmailService)
    {
        $this->sendEmailService = $sendEmailService;
    }

    public function validateData($data)
    {

        $validator = Validator::make($data, [
            'mensagem' => 'required|string',
            'nome' => 'required|string',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            $erro = $validator->errors()->first();
            abort(response()->json(['message' => $erro], 409));
        }

        return $this->sendEmailService->sendCredentials($data);
    }
}
