<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection1 = collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        $produits = Produit::all();

        $collection2 = collect([
            [ "title" => "Le titre du livre 1", "Date" => "01/04/2021", "nbPages" => "10"],
            [ "title" => "Le titre du livre 2", "Date" => "01/04/2021", "nbPages" => "1000"],
            [ "title" => "Le titre du livre 3", "Date" => "01/04/2021", "nbPages" => "500"],
            [ "title" => "Le titre du livre 4", "Date" => "01/04/2021", "nbPages" => "700"],
            [ "title" => "Le titre du livre 5", "Date" => "01/04/2021", "nbPages" => "900"],
            [ "title" => "Le titre du livre 6", "Date" => "01/04/2021", "nbPages" => "150"],
            ]);
        // dump($collection2);
        $collectionFiltree = $collection2->filter(function($livre, $key){
            return $livre["nbPages"] > 500;
        });
        dd($collection2->avg("nbPages"));

        dd($produits->first()->designation);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        dd($produit);
        // $produit = Produit::find($id);
        // dd($produit);
        return view('pages.front-office.edit-produit', [
            'produit' => $produit,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        //
    }
}
