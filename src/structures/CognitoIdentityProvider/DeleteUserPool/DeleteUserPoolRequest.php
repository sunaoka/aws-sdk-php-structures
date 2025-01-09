<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteUserPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 */
class DeleteUserPoolRequest extends Request
{
    /**
     * @param array{UserPoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
