<?php
App::uses('AppModel', 'Model');
class User extends AppModel {


public function getAllUsers(){

	$users = $this->find('all');
	return $users;

}

}
?>