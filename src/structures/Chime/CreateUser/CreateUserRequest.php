<?php

namespace Sunaoka\Aws\Structures\Chime\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Username
 * @property string $Email
 * @property 'PrivateUser'|'SharedDevice' $UserType
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Username?: string,
     *     Email?: string,
     *     UserType?: 'PrivateUser'|'SharedDevice'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
