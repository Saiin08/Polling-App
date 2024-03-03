<?php

namespace App\Http\Controllers;
use App\Models\Poll;

use Illuminate\Http\Request;

class PollController extends Controller
{
    public function index() {
        $polls = Poll::with (['options','user'])
                       ->get();
        return view('homepage',compact('polls'));
    }

    public function edit($id=null) {
        if($id) {
            $poll = Poll::with ('options')->findOrFail($id);
        } else {
            $poll = new Poll;
        }

        return view('polls.edit',compact('poll'));
    }
}
