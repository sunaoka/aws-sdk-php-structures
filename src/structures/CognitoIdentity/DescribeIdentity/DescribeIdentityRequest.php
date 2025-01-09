<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\DescribeIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityId
 */
class DescribeIdentityRequest extends Request
{
    /**
     * @param array{IdentityId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
