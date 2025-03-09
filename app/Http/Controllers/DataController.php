<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    public function index(){
        $datas = Data::all();
        return view('index', ['datas' => $datas]);
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $hasil = $request->validate([
            'nama' => 'required',
            'umur' => 'required|numeric',
            'kelas' => 'required',
            'alamat' => 'required'
        ]);

        $newData = Data::create($hasil);

        return redirect(route('data.index'));
    }
    public function edit(Data $data){
        return view('edit', ['data' => $data]);
    }
    public function update(Request $request, Data $data){
        $hasil = $request->validate([
            'nama' => 'required',
            'umur' => 'required|numeric',
            'kelas' => 'required',
            'alamat' => 'required'
        ]);

        $data->update($hasil);

        return redirect(route('data.index'))->with('success', 'Data Terupdate');
    }
    
    public function destroy(Data $data){
        $data->delete();
        return redirect(route('data.index'))->with('success','Data Terhapus');
    }
}