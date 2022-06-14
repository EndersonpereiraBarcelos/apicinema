<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CinemaAG;

class ApiController extends Controller
{
    public function allAgendamentos()
    {
        $Cinema = CinemaAG::all();
        if (count($Cinema) > 0) {
            return response()->json($Cinema, 200);
        } else {
            return response()->json(['message' => 'Nenhum agendamento encontrado'], 404);
        }
    }

    public function createAgendamento(Request $request)
    {
        $Cinema = CinemaAG::create($request->all());
        if ($Cinema) {
            return response()->json($Cinema, 201);
        } else {
            return response()->json(['message' => 'Erro ao criar agendamento'], 404);
        }
    }

    public function buscarAgendamento($id)
    {
        $Cinema = CinemaAG::find($id);
        if ($Cinema) {
            return response()->json($Cinema, 200);
        } else {
            return response()->json(['message' => 'Agendamento não encontrado'], 404);
        }
    }

    public function AttAgendamento(Request $request, $id)
    {
        $Cinema = CinemaAG::find($id);
        if ($Cinema) {
            $Cinema->update($request->all());
            return response()->json($Cinema, 200);
        } else {
            return response()->json(['message' => 'Agendamento não encontrado'], 404);
        }
    }

    public function deletAgendamento($id)
    {
        $Cinema = CinemaAG::find($id);
        if ($Cinema) {
            $Cinema->delete();
            return response()->json(['message' => 'Agendamento deletado'], 200);
        } else {
            return response()->json(['message' => 'Agendamento não encontrado'], 404);
        }
    }
}
