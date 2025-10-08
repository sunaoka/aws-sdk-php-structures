<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeLoadBalancerAttributes;

trait DescribeLoadBalancerAttributesTrait
{
    /**
     * @param DescribeLoadBalancerAttributesRequest $args
     * @return DescribeLoadBalancerAttributesResponse
     */
    public function describeLoadBalancerAttributes(DescribeLoadBalancerAttributesRequest $args)
    {
        $result = parent::describeLoadBalancerAttributes($args->toArray());
        return new DescribeLoadBalancerAttributesResponse($result->toArray());
    }
}
