<?php

// Ҫ�з�װ�ı�Ҫ��

class Model1
{
    private $pdo;

    // ���Դ������ļ��ж�ȡ
    // ����
    public function __construct($dsn, $username, $password)
    {
        $this->pdo = new PDO($dsn, $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }

    public $sql = array();

    // table

    public function table()
    {

    }

    public function where()
    {

    }

    public function limit()
    {

    }

    public function order()
    {

    }

    public function field()
    {

    }

    public function select()
    {

    }

    public function insert()
    {

    }

    public function delete()
    {

    }

    public function update()
    {

    }


}