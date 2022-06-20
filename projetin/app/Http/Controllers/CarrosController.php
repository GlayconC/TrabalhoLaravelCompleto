<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelCarros;
use Log;

class CarrosController extends Controller
{
    private $objCarros;

    public function __construct(){
        $this->objCarros = new ModelCarros;
    }
    
    public function index(){
        $carros = $this->objCarros->all();
        return view('carros.index',compact('carros'));
    }
    
    public function create(){   
        return view('carros.create');
    }
    
    public function edit($id){
        $carros = $this->objCarros->find($id);
        return view('carros.create',compact('carros'));
    }

    public function store(Request $request){
        $cad = $this->objCarros->create([
            'id' => $request->id,
            'nome' => $request->nome,
            'preco' => $request->preco
        ]);
        if($cad){
            return redirect('carros');
        }
    }

    public function update(Request $request, $id){
        $this->objCarros->where(['id'=>$id])->update([
            'id' => $request->id,
            'nome' => $request->nome,
            'preco' => $request->preco
        ]);
        return redirect('carros');
    }

    public function destroy($id){
        $del = $this->objCarros->destroy($id);
        return redirect('carros');
    }
}