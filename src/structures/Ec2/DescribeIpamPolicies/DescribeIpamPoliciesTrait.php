<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamPolicies;

trait DescribeIpamPoliciesTrait
{
    /**
     * @param DescribeIpamPoliciesRequest $args
     * @return DescribeIpamPoliciesResponse
     */
    public function describeIpamPolicies(DescribeIpamPoliciesRequest $args)
    {
        $result = parent::describeIpamPolicies($args->toArray());
        return new DescribeIpamPoliciesResponse($result->toArray());
    }
}
