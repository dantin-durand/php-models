<?php 

namespace App\Models;
use App\Models\Model;

class User extends Model
{

    public $id;
    public $first_name;
    public $last_name;
    public $email;
    private $password;

    public function __toString()
    {
        return json_encode($this);
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of first_name and last_name
     */ 
    public function getFullName()
    {
        return $this->first_name . " " . $this->last_name;
    }

    /**
     * Get the value of first_name
     */ 
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Get the value of last_name
     */ 
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }



}
