<?php

namespace App\Http\Controllers;

use App\Models\JurusanPopuler;
use Illuminate\Http\Request;
use App\Http\Requests\JurusanPopulerRequest;

class JurusanPopulerController extends Controller
{
    public function index(){
        $JurusanPopuler = JurusanPopuler::get();
        return view('index', compact('JurusanPopuler'));
    }

    public function tambah(){
        return view('tambah');
    }

    public function edit($id){
        $JurusanPopuler = JurusanPopuler::where('id', $id)->first();
        return view('edit', compact('JurusanPopuler'));
    }

    public function lihat($id){
        $JurusanPopuler = JurusanPopuler::where('id', $id)->first();
        return view('lihat', compact('JurusanPopuler'));
    }

    public function store(JurusanPopulerRequest $request)
    {
        $JurusanPopuler = new JurusanPopuler();

        $JurusanPopuler->Namajurusan = $request->Namajurusan;
        $JurusanPopuler->Deskripsijurusan = $request->Deskripsijurusan;

        $JurusanPopuler->save();

        return redirect('/');
    }

    public function update(JurusanPopulerRequest $request, $id)
    {
        $JurusanPopuler = JurusanPopuler::where('id', $id)->first();

        $JurusanPopuler->Namajurusan = $request->Namajurusan;
        $JurusanPopuler->Deskripsijurusan = $request->Deskripsijurusan;

        $JurusanPopuler->update();

        return redirect('/');
    }

    public function hapus($id)
    {
        $JurusanPopuler = JurusanPopuler::where('id', $id)->first();

        $JurusanPopuler->delete();

        return redirect('/');
    }
}
