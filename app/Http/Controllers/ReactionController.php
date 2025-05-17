<?php

namespace App\Http\Controllers;

use App\Events\ReactionEvent;
use Illuminate\Http\Request;

class ReactionController extends Controller
{
    //
    public function index()
    {

        return view('reaction.index');
    }
    public function reaction()
    {
        event(
            new ReactionEvent(
                reaction: request()->input('reaction'),
                userId: request()->input('userId'),
            )
        );

        return response('ok', 200);
    }
}
