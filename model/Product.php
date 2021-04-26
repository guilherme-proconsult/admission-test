<?php

class Product
{

    private $name;
    private $image;
    private $price;
    private $db;

    public function __construct()
    {
        $this->db = mysqli_connect('localhost', 'root', '', 'products');
        if (!$this->db) {
            echo "Error: Falha ao conectar-se com o banco de dados MySQL. <br>";
            echo mysqli_connect_errno();
            exit;
        }
    }

    public function save()
    {
        //
    }

    public function list()
    {
        //
    }

    public function update()
    {
        //
    }

    public function delete()
    {
        //
    }

}