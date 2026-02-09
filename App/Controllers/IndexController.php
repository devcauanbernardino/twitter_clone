<?php 

namespace App\Controllers;

class IndexController {

    private $view;

    public function __construct() {
        $this->view = new \stdClass();
    }

    public function index() {
        $this->view->dados = ['sofa', 'cadeira', 'cama'];
        $this->render('index');

    }

    public function sobreNos() {
        $this->view->dados = ['Notebook', 'smartphone'];
        $this->render('sobreNos');

    }

    public function render($view) {
        $classAtual = get_class($this);

        $classAtual =  str_replace('App\\Controllers\\', '', $classAtual);

        $classAtual =  str_replace('Controller', '', $classAtual);

        $classAtual =  strtolower($classAtual);

        require_once "../App/Views/". $classAtual . "/" . $view . ".phtml";

    }
}




?>