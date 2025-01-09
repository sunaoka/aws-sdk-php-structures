<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GlobalSignOut;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 */
class GlobalSignOutRequest extends Request
{
    /**
     * @param array{AccessToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
