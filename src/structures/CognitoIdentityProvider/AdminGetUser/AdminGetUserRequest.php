<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminGetUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 */
class AdminGetUserRequest extends Request
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
