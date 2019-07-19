<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class ProjetoVagnerController extends Controller
{
	public function createAluno (Request $request)
{
	$aluno = new Aluno;
	$aluno->nome = $request->nome;
	$aluno->email = $request->email;
	$aluno->matricula = $request->matricula;
	$aluno->telefone = $request->telefone;
	$aluno->save();

	return response()->success($aluno);

}
public function listAluno()
{
	return Aluno::all();

}

public function showAluno($id)
{
	$aluno = Aluno::findOrFail($id);
	if ($aluno){
		return response()->success($aluno);
	}else{
		$data = "Aluno não encontrado, verifique id";
		return response()->error($data, 400);

	}

}

public function updateAluno(Request $request, $id)
{
	$aluno = Aluno::findOrFail($id);
	if($request->nome)
		$aluno->nome = $request->nome;
	if($request->email)
		$aluno->email = $request->email;
	if($request->matricula)
		$aluno->matricula = $request->matricula;
	if($request->telefone)
		$aluno->telefone = $request->telefone;
	$aluno->save();

	return response()->success($aluno);


}

public function deleteAluno($id)
{
	Aluno::destroy($id);
	return response()-> json(['Aluno deletado']);
}




}

