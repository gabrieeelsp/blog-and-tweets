<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entry;
class GuessController extends Controller
{
    public function index()
    {
        $entries = Entry::with('user')
            ->orderByDesc('created_at')
            ->orderByDesc('id')
            ->paginate(10);
        return view('welcome', compact('entries'));
    }

    public function show(Entry $entry)
    {
        return view('entries.show', compact('entry'));
    }
}
