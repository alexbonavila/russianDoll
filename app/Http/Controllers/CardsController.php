<?php

namespace App\Http\Controllers;

use App\Card;

class CardsController extends Controller
{
    public function index()
    {
//        $cards = \Cache::remember('cards',5,function (){
//            $cards = Card::with('notes')->get();
//        });

        $cards = Card::with('notes')->get();

        return view('cards.index', compact('cards'));

    }
}
