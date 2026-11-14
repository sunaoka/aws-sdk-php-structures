<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkingFlexCostAllocationPolicyAssociations;

trait DescribeNetworkingFlexCostAllocationPolicyAssociationsTrait
{
    /**
     * @param DescribeNetworkingFlexCostAllocationPolicyAssociationsRequest $args
     * @return DescribeNetworkingFlexCostAllocationPolicyAssociationsResponse
     */
    public function describeNetworkingFlexCostAllocationPolicyAssociations(DescribeNetworkingFlexCostAllocationPolicyAssociationsRequest $args)
    {
        $result = parent::describeNetworkingFlexCostAllocationPolicyAssociations($args->toArray());
        return new DescribeNetworkingFlexCostAllocationPolicyAssociationsResponse($result->toArray());
    }
}
