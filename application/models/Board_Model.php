<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board_Model extends CI_Model {
	public function insertBoard($data)
	{
    	return $this->db->insert('board', $data);
	}

	public function getBoard()
	{
		$query = $this->db->get_where('board', array('id_user' => $this->session->userdata('id')));
		return $query->result();
	}

	public function getBoardById($id) {
		$query = $this->db->get_where('board', array('id' => $id, 'id_user' => $this->session->userdata('id') ));
		return $query->row();
	}

	public function updateBoard($id, $boardName, $boardDesc) {
		$this->db->set('board_name', $boardName);
		$this->db->set('board_desc', $boardDesc);
		$this->db->where(array('id'=> $id, 'id_user' => $this->session->userdata('id') ));
		$query = $this->db->update('board');
		return $query;
	}

	public function deleteBoard($id)
	{
		$query = $this->db->delete('board', array('id' => $id));
		return $query;
	}
}

/* End of file Board_Model.php */
/* Location: ./application/models/Board_Model.php */