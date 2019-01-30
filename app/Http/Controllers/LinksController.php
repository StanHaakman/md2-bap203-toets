<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Link;
use Symfony\Component\Routing\Annotation\Route;

class LinksController extends Controller
{
    public function index()
    {
        $links = Link::all();

        return view('show-links', compact('links'));
    }

    public function createLink()
    {
        return view('create-link');
    }

    public function storeLink()
    {

        Link::create(request()->validate([
            'title' => ['required', 'min:8'],
            'description' => ['required'],
            'url' => ['required', 'regex:/^((?:https?\:\/\/|www\.)(?:[-a-z0-9]+\.)*[-a-z0-9]+.*)$/']
        ]));
        return redirect('/laravel-links');
    }

    public function destroyLink($id)
    {

        Link::find($id)->delete();

        return redirect('/laravel-links');  
    }
}
