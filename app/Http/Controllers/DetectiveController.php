<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detective;

class DetectiveController extends Controller
{
    //
    public function show($detective_slug)
    {
        $detective = Detective::where('slug', $detective_slug)->first();

        if (!$detective) {
            abort(404, 'Detective not found');
        }

        $view = view('detective/show');
        $view->detective = $detective;
        return $view;
    }
}
