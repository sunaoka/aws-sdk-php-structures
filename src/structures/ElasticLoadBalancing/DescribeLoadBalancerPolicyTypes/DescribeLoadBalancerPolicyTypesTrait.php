<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancerPolicyTypes;

trait DescribeLoadBalancerPolicyTypesTrait
{
    /**
     * @param DescribeLoadBalancerPolicyTypesRequest $args
     * @return DescribeLoadBalancerPolicyTypesResponse
     */
    public function describeLoadBalancerPolicyTypes(DescribeLoadBalancerPolicyTypesRequest $args)
    {
        $result = parent::describeLoadBalancerPolicyTypes($args->toArray());
        return new DescribeLoadBalancerPolicyTypesResponse($result->toArray());
    }
}
