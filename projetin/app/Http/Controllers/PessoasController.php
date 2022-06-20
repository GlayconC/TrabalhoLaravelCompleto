<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelPessoas;
use App\Models\ModelCarros;
use App\Models\ModelCidades;
use Log;

class PessoasController extends Controller
{
    private $objPessoas;
    private $objCidades;
    private $objCarros;

    public function __construct(){
        $this->objPessoas = new ModelPessoas;
        $this->objCidades = new ModelCidades;
        $this->objCarros = new ModelCarros;
    }
    
    public function index(){
        $pessoas = $this->objPessoas->all();
        return view('pessoas.index',compact('pessoas'));
    }
    
    public function create(){
        $cidades = $this->objCidades->all();
        $carros = $this->objCarros->all();
        return view('pessoas.create',compact('cidades','carros'));
    }
    
    public function edit($id){
        $pessoas = $this->objPessoas->find($id);
        $cidades = $this->objCidades->all();
        $carros = $this->objCarros->all();
        return view('pessoas.create',compact('pessoas','cidades','carros'));
    }

    public function store(Request $request){
        $cad = $this->objPessoas->create([
            'id' => $request->id,
            'nome' => $request->nome,
            'nascimento' => $request->nascimento,
            'carro' => $request->carro,
            'cidade' => $request->cidade
        ]);
        if($cad){
            return redirect('pessoas');
        }
    }

    public function update(Request $request, $id){
        $this->objPessoas->where(['id'=>$id])->update([
            'id' => $request->id,
            'nome' => $request->nome,
            'nascimento' => $request->nascimento,
            'carro' => $request->carro,
            'cidade' => $request->cidade
        ]);
        return redirect('pessoas');
    }

    public function destroy($id){
        $del = $this->objPessoas->destroy($id);
        return redirect('pessoas');
    }
}