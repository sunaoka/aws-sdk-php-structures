<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 */
class GetUserRequest extends Request
{
    /**
     * @param array{AccessToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
