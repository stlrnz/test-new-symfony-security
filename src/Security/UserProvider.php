<?php

declare(strict_types=1);

namespace App\Security;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

final class UserProvider implements UserProviderInterface
{

    public function refreshUser(UserInterface $user)
    {
        return $user;
    }


    public function supportsClass(string $class)
    {
        return $class === User::class;
    }


    public function loadUserByUsername(string $username)
    {
        return new User($username);
    }


    public function loadUserByIdentifier(string $username)
    {
        return $this->loadUserByUsername($username);
    }
}