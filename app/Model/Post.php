<?php

App::uses('AppModel', 'Model');

class Post extends AppModel {
    // Defining a relationship where one post belongs to one user.
    public $belongsTo = 'User';
	public $validate = array(
        'title' => array(
            'rule' => 'notBlank'
        ),
        'body' => array(
            'rule' => 'notBlank'
        )
    );

    public function isOwnedBy($post, $user) {
	    return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
	}

}
