<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Models\CadastroContato;

class CadastroController extends Controller
{
  public function create()
  {
    return view('site.register.contact');
  }

  public function store(request $request)
  {

    CadastroContato::create([
      'name' => $request->name,
      'surname' => $request->email,
      'email' => $request->email,
      'telefone' => $request->telefone
    ]);

    return "Cadastrado com sucesso";
  }

  public function show()
  {
    $data= CadastroContato::all();
    return view('list', ['cadastros'=>$data]);
  }
}
