<?php

namespace App\Http\Controllers;

use App\Card;
use App\Http\Requests;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::all();
        return view('cards.index', compact('cards'));
    }

    public function show(Card $card)
    {
        return view('cards.show', compact('card'));
    }
}
