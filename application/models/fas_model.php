<?php
class fas_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function get($table,$fields='',$where='', $orderby="",$direction="",$limitEnd=0,$limitstart=0){
        $this->db->from($table);
        if($fields!='')
        {
            $this->db->select($fields);
        }
        if($where!='')
        {
            $this->db->where($where);
        }
        if($limitEnd > 0)
        {
            $this->db->limit($limitEnd,$limitstart);
        }
        if($orderby){
            $this->db->order_by($orderby,$direction);
            }
        $query = $this->db->get();
        $result = $query->result_array() ;
        return $result;
    }
    function get_where($table,$fields='',$where=''){
        $this->db->from($table);
        if($fields!='')
        {
            $this->db->select($fields);
        }
        if($where!='')
        {
            $this->db->where($where);
        }
        
        $query = $this->db->get();
        
            return $query->row_array();
        }
   
    
    function add($table,$data){
        $this->db->insert($table, $data); 
        $a=$this->db->insert_id();        
        if ($this->db->affected_rows() == '1')
		{
			return $a;
		}
		return FALSE;       
    }
    function edit($table,$data,$fieldID,$ID){
        $this->db->where($fieldID,$ID);
        $this->db->update($table, $data);
        if ($this->db->affected_rows() >= 0)
		{
			return TRUE;
		}
		return FALSE;       
    }
    function delete($table,$fieldID,$ID){
        $this->db->where($fieldID,$ID);
        $this->db->delete($table);
        if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		return FALSE;        
    }   
	
    function query($qry)
    {
        $query=$qry;
        $result=$this->db->query($query);
        $result = $query->result_array() ;
        if(count($result)>1)
        {
             return $result;
        }
        else
        {
            return $query->row_array();
        }
    }
	function count($table){
		return $this->db->count_all($table);
	}
    function count_spec($table,$where,$id)
    {
        $this->db->from($table);
        $this->db->where($where,$id);
        $query = $this->db->get();
        $result = $query->result_array() ;
        return count($result);
    }
}