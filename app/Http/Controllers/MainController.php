<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Player;

class MainController extends Controller
{
    
    public function home() {

        $players = Player::orderBy('number') -> get();

        $data = [
            'players' => $players
        ];

        return view('pages.home', $data);
    }

    public function show($id) {

        $player = Player::find($id);

        $data = [
            'player' => $player
        ];

        return view('pages.player', $data);
    }
}
