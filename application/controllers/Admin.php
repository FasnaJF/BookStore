<?php
/**
 * Created by IntelliJ IDEA.
 * User: Fasna
 * Date: 8/8/2015
 * Time: 3:02 PM
 */
class Admin extends CI_Controller {

    //public $id = 1;

    public function index()
    {

        $this->login();
    }

    public function login(){

        if ($this->session->userdata('user_id')) {

            $this->loggedHomePage();
        }
        else{
            $this->homePage();
        }

    }

    public function loginButton(){

        if ($this->session->userdata('user_id')) {
            $this->phpAlert("Logged Out");
            $this->logout();
        }
        else{
            $this->login();
        }

    }

    public function logout(){

        $this->session->unset_userdata('user_id');

        $this->homePage();


    }


    public function buyBook(){

        $id = isset($_POST['bookID']) ? $_POST['bookID'] : '';

        if ($this->session->userdata('user_id')) {


            $this->load->model('book');
            $data['books'] =$this->book->getAllBooks();

            if($data['books'][$id-1]['Stock']>0){
                $this->book->updateBook($id);
                $this->loggedHomePage();
            }
            else{
                $this->phpAlert("Out Of Stock");
                $this->loggedHomePage();
            }


        }
        else{
            $this->homePage();
        }

    }

    public function homePage()
    {


            $this->load->model('book');
            $data['books'] = $this->book->getAllBooks();

            $this->load->view('dash/dash_header');
            $this->load->view('dash/home', $data);
            $this->load->view('dash/form');
            $this->load->view('dash/dash_footer');


    }

    public function loggedHomePage()
    {

            $this->load->model('book');
            $data['books'] = $this->book->getAllBooks();

            $username = $this->session->userdata('userName');
            array_push($data['books'],$username);

            $this->load->view('dash/dash_header');
            $this->load->view('dash/home', $data);
            $this->load->view('dash/buy');
            $this->load->view('dash/dash_footer');

    }

    public function addUser(){

            $username = isset($_POST['username']) ? $_POST['username'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';
            $conf_password = isset($_POST['conf_password']) ? $_POST['conf_password'] : '';


            if (isset($email) && isset($password) && isset($conf_password) && isset($username)) {

                if ($password == $conf_password) {

                    $password = sha1($password);
                    $data = array(
                        'Username'=>$username,
                        'Email' => $email,
                        'Password' => $password
                    );

                    $this->load->model('book');

                    $this->book->addNewUser($data);

                }

            } else {
                echo "Required Files Not Recieved...";
            }


    }


    public function authenticate(){

        if(!$this->session->userdata('user_id')){

            $user = isset($_POST['username'])?$_POST['username']:null;
            $pass = isset($_POST['password'])?$_POST['password']:null;

//            echo $user;

            $this->load->model('book');
            $user_id = $this->book->authenticate($user,$pass);
            //print_r($user_id);

            if($user_id){

                $this->session->set_userdata('user_id',$user_id['UserID'] );
                $this->session->set_userdata('userName', $user_id['Username']);
                $this->phpAlert("You have Successfully Logged in :)");
                $this->loggedHomePage();

            }else{
                $this->phpAlert("Username or Password is wrong.. Verify your Email if you haven't did that :)");
                $this->login();
            }

        }else{
            $this->login();
            //echo $this->session->userdata('user_id');

        }


    }

    public function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }

}

