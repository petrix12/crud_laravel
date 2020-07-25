<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio()
    {
        //$notas = App\Nota::all();
        $notas = App\Nota::paginate(2);
        return view('welcome', compact('notas'));
    }

    public function detalle($id)
    {
        $nota = App\Nota::findOrFail($id);
        return view('notas.detalle', compact('nota'));
    }

    public function crear(Request $request){
        // return $request->all();

        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required'
        ]);

        $notaNueva = new App\Nota;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;
        $notaNueva->save();
        return back()->with('mensaje', 'Nota agregada!');
    }

    public function editar($id)
    {
        $nota = App\Nota::findOrFail($id);
        return view('notas.editar', compact('nota'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required'
        ]);

        $notaUpdate = App\Nota::findOrFail($id);
        $notaUpdate->nombre = $request->nombre;
        $notaUpdate->descripcion = $request->descripcion;
        $notaUpdate->save();
        return back()->with('mensaje', 'Nota actualizada!');
    }

    public function eliminar($id)
    {
        $notaEliminar = App\Nota::findOrFail($id);
        $notaEliminar->delete();
        return back()->with('mensaje', 'Nota eliminada!');
    }

    public function fotos()
    {
        return view('fotos');
    }

    public function blog()
    {
        return view('blog');
    }

    public function nosotros($nombre = null)
    {
        $equipo = ['Ignacio', 'Abelardo', 'Pedro', 'César', 'Auxi'];
        // return view('nosotros',['equipo'=>$equipo, 'nombre'=>$nombre]);
        return view('nosotros', compact('equipo', 'nombre'));
    }
}
