<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeSecurityPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecurityPolicyName
 */
class DescribeSecurityPolicyRequest extends Request
{
    /**
     * @param array{SecurityPolicyName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
