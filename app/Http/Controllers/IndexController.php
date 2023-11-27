<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;

class IndexController extends Controller
{
    public function index(): Response
    {
        return inertia(
            'Index/Index', [
                'message' => 'Hello from IndexController'
            ]
        );
    }

    public function show(): Response
    {
        return inertia('Index/Show');
    }
}
