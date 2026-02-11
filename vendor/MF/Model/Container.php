<?php 

namespace MF\Model;

use App\Connection;

class Container {
    public static function getModel($model){
        $class = "\\App\\Models\\" .ucfirst($model);

        $conn = Connection::getDb();

        return new $class($conn);

    //retornar o modelo solicitado ja instanciado, inclusive com a conexao estabelecida
    }
}


?>