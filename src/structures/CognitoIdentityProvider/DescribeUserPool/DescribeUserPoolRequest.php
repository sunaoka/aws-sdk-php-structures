<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 */
class DescribeUserPoolRequest extends Request
{
    /**
     * @param array{UserPoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
