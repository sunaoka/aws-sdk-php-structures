<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancerPolicies;

trait DescribeLoadBalancerPoliciesTrait
{
    /**
     * @param DescribeLoadBalancerPoliciesRequest $args
     * @return DescribeLoadBalancerPoliciesResponse
     */
    public function describeLoadBalancerPolicies(DescribeLoadBalancerPoliciesRequest $args)
    {
        $result = parent::describeLoadBalancerPolicies($args->toArray());
        return new DescribeLoadBalancerPoliciesResponse($result->toArray());
    }
}
