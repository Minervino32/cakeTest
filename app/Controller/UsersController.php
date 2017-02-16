<?php

class UsersController extends AppController {
	public $uses = array('User');


	public function index() {

	$users = $this->User->getAllUsers();
	$this->set('users',$users);

}

}




?>