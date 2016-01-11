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
     * ƴ��SQL
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

    public function count()
    {

    }

    /**
     * ����
     * ��ʽ���ã���ε���
     */

    /**
     * ��ε��ã�Ϊ�滻
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
     * where֮����and����
     * ֱ��ƴ��Ϊwhere�ַ���������һЩ
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

