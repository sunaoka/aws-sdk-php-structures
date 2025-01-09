<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeResiliencyPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 */
class DescribeResiliencyPolicyRequest extends Request
{
    /**
     * @param array{policyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
