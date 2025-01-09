<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\DescribeIdentityPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 */
class DescribeIdentityPoolRequest extends Request
{
    /**
     * @param array{IdentityPoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
