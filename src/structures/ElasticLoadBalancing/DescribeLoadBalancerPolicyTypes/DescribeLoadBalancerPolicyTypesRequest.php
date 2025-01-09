<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancerPolicyTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $PolicyTypeNames
 */
class DescribeLoadBalancerPolicyTypesRequest extends Request
{
    /**
     * @param array{PolicyTypeNames?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
