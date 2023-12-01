<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use App\Models\Curso;


class CursoController extends Controller
{
  
    public function index(){
        return view('index');
    }
    public function mostrarFormCurso(){
        return view('cad_curso');
    }
    
    public function mostrarManipulaCurso(){
        $registrosCurso = Curso::All();
        return view('manipula_curso',['registrosCurso' => $registrosCurso]);
    }
    public function DeletarCurso(Curso $registrosCurso){
        $registrosCurso->delete();
        return Redirect::route('manipula-curso');
    }

    public function MostrarAlterarCurso($id)
    {
        $curso = Curso::find($id);
    
        if (!$curso) {
            return Redirect::route('manipula-curso')->with('error', 'Curso não encontrado.');
        }
        return view('cad_curso', ['curso' => $curso]);
    }

    public function atualizarCurso(Request $request, $id)
{
    $curso = Curso::findOrFail($id);
    $request->validate([
        'idcategoria' => 'required',
        'nomecurso' => 'string|required',
        'cargahoraria' => 'string|required',
        'valor' => 'string|required',
    ]);

    $curso->update($request->all());
    return Redirect::route('manipula-curso')->with('success', 'Curso atualizado com sucesso!');
}
    

    public function cadastroCurso(Request $request){
        $registrosCurso = $request->validate([
        'idcategoria' => 'required',
        'nomecurso' => 'string|required',
        'cargahoraria'=> 'string|required',
        'valor'=> 'string|required',
        ]);

        Curso::create($registrosCurso);

        return Redirect::route('index');
    }
}
