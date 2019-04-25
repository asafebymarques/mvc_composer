<?php

class homeController extends Controller{
    public function index(){
        $anuncios = new Anuncios();
        $usuario = new Usuario();

        $dados = array(
            'quantidade' => $anuncios->getQuantidade(),
            'nome' => $usuario->getNome(),
        );

        $this->loadTemplate('home',$dados);
    }

}