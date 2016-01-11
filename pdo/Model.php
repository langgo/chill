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
     * 拼接SQL
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
     * 执行
     * 对外比较宽泛的接口，根据需要不同的结果，调用不同的接口
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
     * 对外 api
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
     * 条件
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
        group 用于对查询的group支持 字符串
        having 用于对查询的having支持 字符串
        join 用于对查询的join支持 字符串和数组
    */

}

/**
 * 1 继承该类
 * 2 事务
 * 3 异常
 * 4 删除零行
 * 5 如何选择 `表`
 * 6 count
 * 7 通用接口，返回值如何确定
 *
 */