<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancerAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 */
class DescribeLoadBalancerAttributesRequest extends Request
{
    /**
     * @param array{LoadBalancerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
