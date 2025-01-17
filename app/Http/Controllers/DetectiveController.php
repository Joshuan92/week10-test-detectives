<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detective;
use App\Crime;


class DetectiveController extends Controller
{
    //
    public function show($detective_slug)
    {
        $detective = Detective::where('slug', $detective_slug)->FirstOrFail();

        // solved with "FirstOrFail

        // if (!$detective) {
        //     abort(404, 'Detective not found');
        // }

        $view = view('detective/show');
        $view->detective = $detective;
        return $view;
    }
    

    public function index() {

        $detectives = Detective::orderBy('name','asc')->get();

        $view = view('detective/index', compact('detectives'));

        return $view;
    }

    public function storeCrime(Request $request)
    {
        $crime = Crime::create(['subject' => $request->subject, 'description' => $request->description]);

        return redirect(action('DetectiveController@index'));
    }

}
