<?php
/**
 * Created by IntelliJ IDEA.
 * User: Fasna
 * Date: 8/8/2015
 * Time: 7:38 PM
 */
class Book extends CI_Model
{
    public function getAllBooks()
    {
        $this->db->select('Price, Stock');
        $this->db->from('books');
        $query = $this->db->get();

        return ($query->result_array());

    }


    public function addNewUser($data)
    {
        $email = $data['Email'];

        $query = $this->db->get_where('user',array('Email'=>$email));

        $exist = $query->num_rows();

        if($exist){
            $this->phpAlert("The Email already exists");
        }
        else{


            $sql = $this->db->insert_string('user', $data);
            $this->db->query($sql);
        }

    }

    public function updateBook($id){
        $this->db->set('Stock', 'Stock-1', FALSE);
        $this->db->where('BookID', $id);
        $this->db->update('books');
    }


    public function authenticate($user, $pass)
    {

        $pass = sha1($pass);
        $this->db->select('UserID, Username')->from('user')->where(array('Username' => $user, 'Password' => $pass));
        $query = $this->db->get();

        $result = $query->result_array();
        return array_shift($result);


    }

    public function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
}