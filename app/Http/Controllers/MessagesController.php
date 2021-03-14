<?php

namespace App\Http\Controllers;


class MessagesController extends Controller
{
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required',
            'subject' => 'required',
        ]);

        return "Datos validados";
    }
}
