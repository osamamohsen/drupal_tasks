<?php

/**
 * Created by PhpStorm.
 * User: osamamohsen
 * Date: 07/12/16
 * Time: 01:36 م
 */
class Empolyee_Testing
{
    public $name,$password;

    /**
     * Empolyee_Testing constructor.
     */
    function __construct($name,$password)
    {
        $this->name = $name;
        $this->password = $password;
    }

    public function getName(){
        $this->name = "Ahmed";
        return $this->name;
    }

    public function Data(){
        return "osama mohsen";
    }

    public function getPassword(){
        return $this->password;
    }
}