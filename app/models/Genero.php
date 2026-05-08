<?php

class Genero{
    //ATRIBUTOS
    private $id;
    private $nome;

    //METODOS GET E SET

    //GET
    public function getId(){
        return $this->id;
    }
    //SET
    public function setId($id){
        $this->id= $id !==null ? (int)$id : null;
    }


    //GET NOME
    public function getNome(){
        return $this->nome;
    }

    //set
    public function setNome($nome){
        $this->nome=trim((string)$nome);
    }


    //METODOS GERAIS

    public static function fromArray($dados){
        $genero=new self();
        $genero->setId($dados['id']?? null);
        $genero->setNome($dados['nome'?? null]);

        return $genero;
    }
}

?>