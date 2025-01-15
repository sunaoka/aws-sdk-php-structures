<?php

namespace Sunaoka\Aws\Structures\Chime\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string|null $Username
 * @property string|null $Email
 * @property 'PrivateUser'|'SharedDevice'|null $UserType
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Username?: string|null,
     *     Email?: string|null,
     *     UserType?: 'PrivateUser'|'SharedDevice'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
