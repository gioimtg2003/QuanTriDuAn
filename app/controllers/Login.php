<?php
class Login extends baseController{
    private $model;
    public function __construct(){
        $this->model = $this->loadModel('loginModel');
    } 

   
}
 ?>