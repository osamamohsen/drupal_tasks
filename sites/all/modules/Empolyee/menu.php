<?php

/**
 * Created by PhpStorm.
 * User: osamamohsen
 * Date: 07/12/16
 * Time: 02:26 م
 */
class menu
{
    /*
     * 		'title' => 'my empolyees Page',
		'description' => 'Description of empolyees Page',
		'page callback' => 'drupal_get_form',
		'page arguments' => array('empolyee_showempolyees'),
		'access callback' => 'user_access',
		'access arguments' => array('access content'),
    page arguemnt = function name
     */
    protected $title , $description , $page_callback , $page_arguments,$access_callback,$access_argument;

    function __construct($title , $description, $page_callback ,$page_arguments,
                         $access_callback="user_access",$access_argument = array('access content'))
    {
        $this->title = $title;
        $this->$description = $description;
        $this->$page_callback = $page_callback;
        $this->$page_arguments = $page_arguments;
        $this->$access_callback = $access_callback;
        $this->$access_argument = $access_argument;
    }
}