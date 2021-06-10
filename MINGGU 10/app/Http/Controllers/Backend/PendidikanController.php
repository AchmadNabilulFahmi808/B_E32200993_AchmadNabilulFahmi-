<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request,
    App\Http\Controllers\Controller;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{

    public function index()
    {
        $pendidikan = Pendidikan::get();
        return view('backend.pendidikan.index',compact('pendidikan'));
    }
        
 
    public function create()
    {
       $pendidikan = null;
       return view('backend.pendidikan.create',compact('pendidikan'));
    }
}