<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use mysqli;


Class UserController extends Controller {
    private $request;

    public function __construct(Request $request){
        $this->request = $request;
    }
    //public function getUsers(){
   //     $users = User::all();
  //  return response($users, 200);
  // }  




    public function loginPage(){
        return view('login');

    }
    public function CRUDPage(){
        return view('CRUD');

    }
    public function verifyUser(){

        $user=$_POST['username'];
        $pass=$_POST['password'];

        $log= app('db')->select("select * from tbluser where username='$user' and password='$pass'");   

        if(empty($log)){
            echo '<script>alert("Incorrect username and password")</script>';

            return view('login');
            
        }else{
            echo '<script>alert("Success")</script>';

            return view('CRUD');
        }
    }

    public function newUserPage(){
        return view('add');
    }

    public function insertUser(){

        $user=$_POST['username'];
        $pass=$_POST['password'];

        $insert =app('db')->select("insert into tbluser(username,password) values('$user','$pass')");
        echo'<script>alert("User added")</script>';

        return view('CRUD');

    }
     
    public function deleteUserPage(){
        return view('delete');
    }

    public function delete(){
        $ID = isset($_POST['id']);
        $check= app('db')->select("select * from tbluser where ID='$ID'");

        if (empty($check)) {
            echo '<script>alert("User does not exist")</script>';
            return view('delete');
        } else {
            $query = app('db')->select("delete from tbluser where ID = '$ID'");
            echo '<script>alert("DELETED")</script>';
            return view('delete');
        }
    }
    public function updateUserPage()
    {
        return view('update');
    }
    public function update()
    {

        $ID = isset($_POST['id']);
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $check = app('db')->select("select * from tbluser where ID = '$ID'");

        if (empty($check)) {
            echo '<script>alert("User does not exist\")</script>';
            return view('update');
        }else {
            app('db')->select("update tbluser set username = '$user', password = '$pass' where ID = '$ID'");
            echo '<script>alert("Update successful")</script>';
            return view('update');
        }
    }
   

}