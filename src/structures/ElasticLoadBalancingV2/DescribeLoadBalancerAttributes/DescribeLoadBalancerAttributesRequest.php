<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeLoadBalancerAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerArn
 */
class DescribeLoadBalancerAttributesRequest extends Request
{
    /**
     * @param array{LoadBalancerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
