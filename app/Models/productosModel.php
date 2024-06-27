<?php

namespace App\Models;

use CodeIgniter\Model;

class productosModel extends Model {

protected $table = "productos";
protected $primaryKey = "id";
protected $allowedFields = ['nombre'];

public function getProductos () {
    return $this->findAll();
}

public function getProducto ($id) {
    return $this->find($id);
}

}

?>