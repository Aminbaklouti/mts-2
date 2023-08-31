<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class IndexController extends Controller
{
    public function index(){

        $path = public_path('assets/img/partners');

        // Get all files from the images folder
        $images = File::files($path);

        return view('index', compact('images'));

    }
}
