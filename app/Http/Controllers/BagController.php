<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bag;

class BagController extends Controller
{
    public function index(){
        $bags = Bag::get();
        return inertia('Bag', [
            'bags' => $bags
        ]);
    }
}