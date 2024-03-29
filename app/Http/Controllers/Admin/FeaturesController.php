<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Feature;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:admin']);
    }

    /**
     * Show the application Features.

     *    @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Admin.features');
    }
    public function changeStatus(Request $request)
    {
        $carousel = Features::all();
        $carousel->status = $request->status;
        $carousel->save();

        return response()->json(['success' => 'Status change successfully.']);
    }
}
