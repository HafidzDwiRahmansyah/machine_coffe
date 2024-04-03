<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffe;

class CoffeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function menu()
    {
        $data = Coffe::all();
        return view('menu', compact('data'));
    }
    public function kopi()
    {
        $coffe = Coffe::all();
        return view('crud', compact('coffe'));
    }
    public function add(Request $request)
    {
        $image = $request->file('image');

        $namefile = $image->getClientOriginalName();

        $image->storeAs('path_to_store', $namefile, 'public');

        // dd($image);

        $coffe = new Coffe();

        $coffe->name = $request->name;
        $coffe->image = $namefile;
        $coffe->price = $request->price;
        $coffe->qty = $request->qty;

        $coffe->save();

        return redirect('/tambah-kopi')->with('berhasil', 'Data berhasil ditambahkan !');
    }
}
