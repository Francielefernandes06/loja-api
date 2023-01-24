<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lojas;
use Illuminate\Http\Request;

class LojaController extends Controller
{

    public function __construct(Lojas $loja)
    {

        $this->loja = $loja;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $lojas= $this->loja->paginate(11);
        return response()->json($lojas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loja = $this->loja->create($request->all());


        return response()->json($loja);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lojas $loja)
    {
         // lojas/{id}/produtos
        return $loja->with('produtos')->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lojas $loja)
    {

        $loja->update($request->all());
        return response()->json($loja);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loja = $this->loja->find($id);
        $loja->delete();
        return response()->json(['data' => ['msg' => 'Loja removida com sucesso!']]);
    }
}
