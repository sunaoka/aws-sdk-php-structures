<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 */
class DeleteUserRequest extends Request
{
    /**
     * @param array{AccessToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
