<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkingFlexCostAllocationPolicies;

trait DescribeNetworkingFlexCostAllocationPoliciesTrait
{
    /**
     * @param DescribeNetworkingFlexCostAllocationPoliciesRequest $args
     * @return DescribeNetworkingFlexCostAllocationPoliciesResponse
     */
    public function describeNetworkingFlexCostAllocationPolicies(DescribeNetworkingFlexCostAllocationPoliciesRequest $args)
    {
        $result = parent::describeNetworkingFlexCostAllocationPolicies($args->toArray());
        return new DescribeNetworkingFlexCostAllocationPoliciesResponse($result->toArray());
    }
}
