<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class RegistrationController extends Controller
{
    public function show(): Response
    {
        $registration = Registration::all()[0];

        return Inertia::render('Registration/Show', [
            'registration' => $registration->only(
                'id',
                'name',
                'lastName',
                'created_at'
            ),
        ]);
    }
}
