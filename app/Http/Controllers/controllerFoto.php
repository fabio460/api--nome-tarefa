<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\ModelFoto;
use Illuminate\Http\Request;

class controllerFoto extends Controller
{
    
    public function index()
    {
        return ModelFoto::all();
        
    }
    public function store(Request $request)
    {
        $modelfoto=new ModelFoto();
        $modelfoto->desc=$request->input('desc');
        $modelfoto->url=$request->file('url')->store('/');
        $modelfoto->save();
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        $var=ModelFoto::findOrFail($id);
        $var->delete();
    }
}
