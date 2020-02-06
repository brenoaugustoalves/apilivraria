<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function criarlivro(Request $request) {

        try{ $livro = new livro();

            $livro->titulo = $request->titulo;
            $livro->autor = $request->autor;
            $livro->descricao = $request->descricao;

            $livro->save();

            return['retorno'=>'salvo com sucesso'];



        } catch(Excpetion $erro){
            return['retorno'=>'erro', 'details' =>$erro];

        }
        }
    

    public function deletar($id){
        try{
            $livro = livro::find($id);

            $livro->delete();

            return ['retorno'=>'deletado com sucesso'];

        }catch(Exception $erro){
            return['retorno'=>'erro', 'details' =>$erro];
        }


          

    }

    public function selecionar($id){

            $livro = livro::find($id);

            return $livro;

        return ['retorno'=>'selecionado com sucesso'];

    }

    public function atualizar(Request $request, $id){
       try{
            $livro = livro::find($id);

            $livro->titulo = $request->titulo;
            $livro->autor = $request->autor;
            $livro->descricao = $request->descricao;

            $livro->save();

            return ['retorno'=>'atualizado com sucesso','data'=>$request->all()];

       } catch(Exception $erro){
        return ['retorno'=>'erro','detals'];

       }

    }
}
