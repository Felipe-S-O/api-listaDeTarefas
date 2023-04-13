<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TarefaRequest;
use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
   
    public function index()
    {
        return Tarefa::all();
    }
   
    public function show(Tarefa $tarefa)
    {
        return $tarefa;
    }

    public function store(TarefaRequest $request)
    {  
        return  response()
        ->json(Tarefa::create($request->all()), 201);
    }

    public function update(Tarefa $tarefa, TarefaRequest $request)
    {  
        $tarefa->fill($request->all());
        $tarefa->save();

        return $tarefa;
    }

    public function destroy(int $tarefa)
    {  
       Tarefa::destroy($tarefa);
       return response()->noContent();
    }

}
