<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeSSLPolicies;

trait DescribeSSLPoliciesTrait
{
    /**
     * @param DescribeSSLPoliciesRequest $args
     * @return DescribeSSLPoliciesResponse
     */
    public function describeSSLPolicies(DescribeSSLPoliciesRequest $args)
    {
        $result = parent::describeSSLPolicies($args->toArray());
        return new DescribeSSLPoliciesResponse($result->toArray());
    }
}
