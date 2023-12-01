<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    //abri o formulario de cadastro
    public function mostrarFormCat(){
        return view('cad_categoria');
    }
    public function mostrarManipulaCategoria(){
        $registrosCategoria = Categoria::All();
        return view('manipula_categoria',['registrosCategoria' => $registrosCategoria]);
    }
    public function index(){
        return view('index');
    }
    public function mostrarFormCurso(){
        return view('cad_curso');
    }
    public function mostrarFormAula(){
        return view('cad_aula');
    }

    public function DeletarCategoria(Categoria $registrosCategoria){
        $registrosCategoria->delete();
        return Redirect::route('manipula-categoria'); 
    }

    public function BuscarCategoriaNome(Request $request){

        $registrosCategoria= Categoria::query();
        $registrosCategoria->when($request->categoria,function($query,$valor)
        {
            $query->where('categoria','like','%',$valor,'%');
        });

        $registrosCategoria = $registrosCategoria->get();
        return view('manipula_categoria',['registrosCategoria' => $registrosCategoria]);

    }

    public function MostrarAlterarCategoria($id)
    {
        $categoria = Categoria::find($id);
    
        if (!$categoria) {
            return Redirect::route('manipula-categoria')->with('error', 'Categoria não encontrada.');
        }
        return view('cad_categoria', ['categoria' => $categoria]);
    }

    public function atualizarCategoria(Request $request, $id)
{
    $categoria = Categoria::findOrFail($id);
    
    $request->validate([
        'nomecategoria' => 'string|required'
    ]);

    $categoria->update($request->all());
    return Redirect::route('manipula-categoria')->with('success', 'Categoria atualizada com sucesso!');
}

    
    public function cadastroCat(Request $request){
        $registrosCat = $request->validate([
        'nomecategoria' => 'string|required'
        ]);

        Categoria::create($registrosCat);

        return Redirect::route('index');
    }

}
