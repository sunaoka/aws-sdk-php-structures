<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\DeleteIdentityPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 */
class DeleteIdentityPoolRequest extends Request
{
    /**
     * @param array{IdentityPoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
