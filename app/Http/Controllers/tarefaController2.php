<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\modelTarefa;
class tarefaController2 extends Controller
{
    public function index()
    {
       return modelTarefa::all();
    }
    public function store(Request $request)
    {
        modelTarefa::create($request->all());
    }
    public function show($id)
    {
        modelTarefa::findOrFail($id);
    }
    public function edit($id)
    {
      //
    }

    public function update(Request $request, $id)
    {
        modelTarefa::findOrFail($id)->update($request->all());
    }
    public function destroy($id)
    {
        modelTarefa::findOrFail($id)->delete();
    }
}
