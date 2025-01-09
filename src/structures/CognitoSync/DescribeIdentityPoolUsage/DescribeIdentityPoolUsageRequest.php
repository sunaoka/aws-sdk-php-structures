<?php

namespace Sunaoka\Aws\Structures\CognitoSync\DescribeIdentityPoolUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 */
class DescribeIdentityPoolUsageRequest extends Request
{
    /**
     * @param array{IdentityPoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
