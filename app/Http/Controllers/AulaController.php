<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use App\Models\Aula;



class AulaController extends Controller
{
    public function index(){
        return view('index');
    }
    public function mostrarFormAula(){
        return view('cad_aula');
    }
    public function mostrarManipulaAula(){
        $registrosAula = Aula::All();
        return view('manipula_aula',['registrosAula' => $registrosAula]);
    }

    public function MostrarAlterarAula($id)
{
    $aula = Aula::find($id);

    if (!$aula) {
        return Redirect::route('manipula-aula')->with('error', 'Aula não encontrada.');
    }
    return view('cad_aula', ['aula' => $aula]);
}

public function atualizarAula(Request $request, $id)
{
    $aula = Aula::findOrFail($id);
    $aula->update($request->all());
    return Redirect::route('manipula-aula')->with('success', 'Aula atualizada com sucesso!');
}

    public function DeletarAula(Aula $registrosAula){
        $registrosAula->delete();

        return Redirect::route('manipula-aula');
    }

    public function cadastroAula(Request $request){
        $registrosAula = $request->validate([
        'idcurso' => 'required',
        'tituloaula' => 'string|required',
        'urlaula'=> 'string|required',
        ]);

        Aula::create($registrosAula);

        return Redirect::route('index');
    }
}
