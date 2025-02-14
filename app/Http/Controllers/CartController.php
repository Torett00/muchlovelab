<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Minicommande;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $x='0';
        $idd=auth::user()->id;
        $Minicommandee=Minicommande::where('user_id',$idd )->where('etat',$x)->get();
        return view('cart',compact('Minicommandee'));
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $x='1';
        $idd=auth::user()->id;
        $Minicommandee=Minicommande::where('etat',$x)->get();
        return view('commnadeadmin',compact('Minicommandee'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $x='0';
        $idd=auth::user()->id;
        $Minicommandee=Minicommande::where('user_id',$idd)->where('etat',$x)->get();
        foreach($Minicommandee as $ss){
        $ss->etat='1'; 
        $ss->save();
         }
        return redirect()->route('CartController.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod=Product::find($id);
        return view("showproductuser",compact('prod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $idd=auth::user()->id;
        $prod=Product::find($id);
        $Minicommande=new Minicommande();
        $Minicommande->user_id=$idd;
        
        $Minicommande->product_id=$prod->id;
        $Minicommande->productname=$prod->product_name;
        $Minicommande->pict=$prod->pict;
        $Minicommande->quantite=$id;
         
        $Minicommande->save();
        return redirect()->route('CartController.index');


        
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
