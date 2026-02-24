<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\laravelFeatures;
class ElizanController extends Controller
{
    public function index()
    {
        $page = laravelFeatures::all();
        return view('index', compact('page'));
    }
}
