<?php

declare(strict_types=1);

namespace App\Security;

use Psr\Log\LoggerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

final class UserProvider implements UserProviderInterface
{
    private $logger;


    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }


    public function refreshUser(UserInterface $user)
    {
        $this->logger->debug('Refreshing user ' . $user->getUserIdentifier());

        return $user;
    }


    public function supportsClass(string $class)
    {
        return $class === User::class;
    }


    public function loadUserByUsername(string $username)
    {
        $this->logger->debug('Loading user ' . $username);

        return new User($username);
    }


    public function loadUserByIdentifier(string $username)
    {
        return $this->loadUserByUsername($username);
    }
}