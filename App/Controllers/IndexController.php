<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;


class IndexController extends Action
{

    public function index()
    {
        //$this->view->dados = ['sofa', 'cadeira', 'cama'];

        //instancia de conexao
        // $conn = Connection::getDb();

        //instaciar modelo
        // $produto = new Produto($conn);

        $produto = Container::getModel('Produto');
        $produtos = $produto->getProdutos();

        $this->view->dados = $produtos;

        $this->render('index', 'layout1');

    }

    public function sobreNos()
    {
        //instancia de conexao
        // $conn = Connection::getDb();

        //instaciar modelo
        // $info = new Info($conn);
        $info = Container::getModel('Info');
        $informacoes = $info->getInfo();

        $this->view->dados =  $informacoes;
        $this->render('sobreNos', 'layout2');

    }


}




?>