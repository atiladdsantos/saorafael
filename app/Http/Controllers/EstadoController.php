<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;

class EstadoController extends Controller
{
    private $estado;
    
    public function __construct()
    {
        $this->estado = new Estado();
    }

    public function obterPorTodos() {
		// return response()->json(Produto::with('obterPorTodos')->get(), 200);
		// return response()->json(Produto::all(), 200);
		return response()->json($this->estado->obterPorTodos(), 200);
		// return response()->json(Produto::with('obterPorTodos'), 200);
    }
    
    public function obterPorId($pk) {
		// return response()->json(Produto::findOrFail($idProduto)->get(), 200);
		return response()->json($this->estado->obterPorId($pk), 200);
		//return $this->produto->obterPorId($idProduto);
	}


}
