<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 30.08.2016
 * Time: 18:16
 */

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

class UserProvider implements UserProviderInterface
{
    Private $user = [
        'admin' =>[
            'username'=> 'admin',
            'password'=> '12345678',
            'roles'=> ['ROLE_USER']
        ]
    ];
    public function loadUserByUserName($username)
    {
        if(!array_key_exists($username, $this->users)) {
            throw new UsernameNotFoundException(
                sprintf('Username "%s" does not exist.', $username)
            );
        }
        $user = $this->users[$username];

        return new User($user['username'], $user['password'], $user['username'], $user['roles']);
        }
    public function refreshUser(UserInterface $user)
    {
        if(!$user instanceof User){
            throw new UnsupportedException(
                sprintf('Instances of "%s" are not supported.', get_class($user))
            );
        }
    }
}