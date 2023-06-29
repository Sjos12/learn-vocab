<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SetController extends Controller
{
    //
    public function index(Request $request)
    {
        return Inertia::render('CreateSet', []);
    }
    public function create()
    {
        $validated = [];
    }
}
