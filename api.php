<?php

use Illuminate\Http\Request;

  Route::post('criar-livro','LivroController@criarlivro');
  Route::delete('deletar-livro','LivroController@deletar');
  Route::put('atualizar-livro{id}', 'LivroController@atualizar');
  Route::get('selecionar-livro{id}','LivroController@selecionar');
