<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class VocabController extends Controller
{
    //
    public function index(Request $request)
    {
        return Inertia::render('pages/Dashboard', []);
    }
}
