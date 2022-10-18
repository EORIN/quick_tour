<?php


namespace App\Models;


class UserModel
{

    private $login;
    private $password;
    private $username;

    /**
     * UserModel constructor.
     * @param $login
     * @param $password
     * @param $username
     */
    public function __construct($login, $password, $username)
    {
        $this->login = $login;
        $this->password = $password;
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login): void
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }



}