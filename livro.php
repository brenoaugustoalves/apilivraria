<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livro extends Model
{
    
    public $titulo; 
    public $autor;
    public $descricao;

    
        public function settitulo($titulo){
            return $this->titulo = titulo;
        }

        public function getTitulo($titulo){
            return $this->tituto;
        }

   
        public function setAutor($autor){
            $this->autor = autor; 

        }

        public function getAutor($autor){
            $this->autor = autor;
        }

       public function setdescricao($descricao){
           $this->descricao = descricao;
       }   

       public function getdescricao($descricao){
           $this->descricao = descricao;
       }

}
