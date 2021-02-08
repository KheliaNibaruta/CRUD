<?php
  class Admin_model extends CI_Model{

    public function login($email,$password)
    {
      $checkAdmin = $this->db->where(['email'=> $email, 'pwd'=> $password])->get('tbl_admin');

      if ($checkAdmin->num_rows() > 0) {
          return $checkAdmin->row();
      }
    }

    public function getObj()
    {
      $this->db->select('*');
      $this->db->from('tbl_obj');
      $obj = $this->db->get();

      return $obj;
    }

    public function getObject($id_obj)
    {
      $this->db->select('*');
      $this->db->from('tbl_obj');
      $this->db->where(['id_obj '=>$id_obj ]);
      $get_all_inf = $this->db->get();
      return $get_all_inf;
    }

    public function update($id_obj)
    {
      $data = array(
        'name'=>$this->input->post('name'),
        'phone'=>$this->input->post('phone'),
        'shipTo'=>$this->input->post('shipTo')
      );

      return $this->db->where('id_obj', $id_obj)->update('tbl_obj', $data);
    }
    public function add()
    {
      $data = array(
        'name'=>$this->input->post('name'),
        'phone'=>$this->input->post('phone'),
        'shipTo'=>$this->input->post('shipTo')
      );

      return $this->db->insert('tbl_obj', $data);
    }

    public function remove($id_obj)
    {
      return $this->db->delete('tbl_obj', ['id_obj' => $id_obj]);
    }
  }
 ?>
