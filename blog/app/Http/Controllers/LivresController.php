<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Livre;


class LivresController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    




    public function create()
    {
        $livre = new Livre();
    	return view('livres.create',compact('livre'));

    }

    


    



}


