<?php

class Model
{
    private $pdo;

    public function __construct($dsn, $username, $password)
    {
        $this->pdo = new PDO($dsn, $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }

    /*private static $cache_pdo = array();

    public static function getInstance($table)
    {

    }*/


    private $_where;


    private $_sql;


    /**
     * ƴ��SQL
     */
    private function _selectSql()
    {

    }

    private function _insertSql()
    {

    }

    private function _updateSql()
    {

    }

    private function _deleteSql()
    {

    }

    /**
     * ִ��
     * ����ȽϿ��Ľӿڣ�������Ҫ��ͬ�Ľ�������ò�ͬ�Ľӿ�
     */
    public function _queryOne($statement, $value)
    {

    }

    public function _queryAll($statement, $value)
    {

    }

    public function _execLastId($statement, $value)
    {

    }

    public function _execRowCount($statement, $value)
    {

    }


    /**
     * ���� api
     */
    public function queryOne()
    {

    }

    public function queryAll()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function insertOne()
    {

    }

    public function insertAll()
    {

    }

    public function table()
    {

    }

    public function count()
    {

    }

    /**
     * ����
     */
    public function where()
    {

        return $this;
    }

    public function limit()
    {

        return $this;
    }

    public function order()
    {

        return $this;
    }

    public function field()
    {

        return $this;
    }

    /*
        group ���ڶԲ�ѯ��group֧�� �ַ���
        having ���ڶԲ�ѯ��having֧�� �ַ���
        join ���ڶԲ�ѯ��join֧�� �ַ���������
    */

}

/**
 * 1 �̳и���
 * 2 ����
 * 3 �쳣
 * 4 ɾ������
 * 5 ���ѡ�� `��`
 * 6 count
 * 7 ͨ�ýӿڣ�����ֵ���ȷ��
 *
 */