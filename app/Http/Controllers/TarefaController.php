<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tarefa;

class TarefaController extends Controller

{
    public function index()
    {
        $tarefas=tarefa::all();
        return response()->json($tarefas);
    }

    
    public function store(Request $request)
    {
        $request->validate ([
            'titulo' => 'required',
            'descricao' => 'required',
            'status' => 'required',
        ]);

        $tarefas=tarefa::create($request->all());
        return response()->json($tarefas);
    
    }


    public function show($id)
    {
        return tarefa::findOrfail($id);
    }

    
    
    
    
    
    public function update(Request $request, string $id)
    {
        $tarefas->update($request->all());
        return response()->json($tarefas);
    }

    public function destroy(tarefa $tarefas)
    {
        $tarefas->delete();
        return response()->json(null, 204);

    }
}
