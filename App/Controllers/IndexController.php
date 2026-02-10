<?php 

namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action{

    public function index() {
        $this->view->dados = ['sofa', 'cadeira', 'cama'];
        $this->render('index');

    }

    public function sobreNos() {
        $this->view->dados = ['Notebook', 'smartphone'];
        $this->render('sobreNos');

    }

    
}




?>