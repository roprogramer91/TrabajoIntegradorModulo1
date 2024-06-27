<?php

namespace App\Controllers;

use App\Models\productosModel;

class productosController extends BaseController
{
    public function index(): string
    {
        $productosModel = new productosModel();
        $data['productos'] = $productosModel->getProductos();
        return view('home/ProductosView',$data);
    }

    public function detalles ($id) 
    {
        $productosModel = new productosModel();
        $data['producto'] = $productosModel -> getproducto($id);
        return view('home/detallesView',$data);
    }
}
