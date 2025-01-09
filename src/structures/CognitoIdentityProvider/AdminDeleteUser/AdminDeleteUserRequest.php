<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminDeleteUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 */
class AdminDeleteUserRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
