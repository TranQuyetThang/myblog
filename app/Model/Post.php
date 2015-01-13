<?php
App::uses('AppModel', 'Model');
class Post extends AppModel {
    
// config for plugin SluggableBehaviour . auto gen value for slug Field
    public $actsAs = array(
	    'Utils.Sluggable' => array(
	        'label' => 'title',
	        'method' => 'multibyteSlug',
	        'separator' => '-'
	    )
	);
	public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}