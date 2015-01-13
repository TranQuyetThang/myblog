<?php
class AppSchema extends CakeSchema{
	var $name = 'AppSchema';

	function before($event = array()){
		return true;
	}

	function after($event = array()){

	}

	var $posts = array(
		'id'       => array('type' => 'integer' , 'null' => false, 'default' => NULL, 'key' => 'primary' ),
		'title'    => array('type' => 'string' , 'null' => false , 'default' => NULL ,'length' => 50),
		'body'     => array('type' => 'text' , 'null' => true , 'default' => NULL),
		'created'  => array('type' => 'datetime' , 'null' => false , 'default' => NULL),
		'modified' => array('type' => 'datetime' , 'null' => false , 'default' => NULL),
		'user_id'  => array('type' => 'integer' , 'null' => false , 'default' => NULL)
		);
	var $users = array(
		'id'       => array('type' => 'integer' , 'null' => false, 'default' => NULL, 'key' => 'primary' ),
		'username' => array('type' => 'string' , 'null' => false , 'default' => NULL ,'length' => 128),
		'password' => array('type' => 'string' , 'null' => false , 'default' => NULL ,'length' => 128),
		'email'    => array('type' => 'string' , 'null' => false , 'default' => NULL ,'length' => 128),
		'role'     => array('type' => 'string' , 'null' => false , 'default' => NULL ,'length' => 64),
		'created'  => array('type' => 'datetime' , 'null' => false , 'default' => NULL),
		'modified' => array('type' => 'datetime' , 'null' => false , 'default' => NULL),
		'status'   => array('type' => 'integer' , 'null' => false , 'default' => 1,)
		);
}
?>