<?php

declare(strict_types=1);

namespace App\Security;

use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface
{
    private $username;


    public function __construct(string $username)
    {
        $this->username = $username;
    }


    public function getRoles()
    {
        return ['ROLE_USER'];
    }


    public function getPassword()
    {
        return null;
    }


    public function getSalt()
    {
        return null;
    }


    public function eraseCredentials()
    {
    }


    public function getUsername()
    {
        return $this->username;
    }


    public function getUserIdentifier()
    {
        return $this->getUsername();
    }
}