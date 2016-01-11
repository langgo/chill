<?php

class ModelException extends Exception
{

}

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

    private $_sql;

    /**
     * 拼接SQL
     * select {field} from {table} where {where} order by {order} limit {limit}
     */
    private function _selectSql()
    {
        $this->sql = 'SELECT ';
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

    public function count()
    {

    }

    /**
     * 条件
     * 链式调用，多次调用
     */

    /**
     * 多次调用，为替换
     */
    private $_table;

    public function table($table)
    {
        $this->_table = $table;
        return $this;
    }

    private $_where;
    private $_where_param = array();

    /**
     * @param $condition
     * @param $param
     * @return $this
     *
     * $user->where('id = ?',$id);
     * $user->where('id = 1')
     * where之间是and连接
     * 直接拼接为where字符串，更好一些
     */
    public function where($condition, $param)
    {
        if ($this->_where) {
            $this->_where .= ' AND ';
        }
        $this->_where .= " ($condition) ";

        if (isset($param)) {
            if (!is_array($param)) {
                $param = array($param);
            }
            $this->_where_param[] = $param;
        }

        return $this;
    }

    private $_limit;

    public function limit($start, $offset)
    {
        if (!is_int($start)) {
            throw new ModelException();
        }
        if (!isset($offset)) {
            $this->_limit = " LIMIT $start";
        } else {
            if (!is_int($offset)) {
                throw new ModelException();
            }
            $this->_limit = " LIMIT $start,$offset ";
        }
        return $this;
    }

    private $_order;
    private $_order_param;

    public function order($condition, $param)
    {

        return $this;
    }

    private $field;

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

