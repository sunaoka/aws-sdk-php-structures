<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkingFlexCostAllocationPolicies;

trait DeleteNetworkingFlexCostAllocationPoliciesTrait
{
    /**
     * @param DeleteNetworkingFlexCostAllocationPoliciesRequest $args
     * @return DeleteNetworkingFlexCostAllocationPoliciesResponse
     */
    public function deleteNetworkingFlexCostAllocationPolicies(DeleteNetworkingFlexCostAllocationPoliciesRequest $args)
    {
        $result = parent::deleteNetworkingFlexCostAllocationPolicies($args->toArray());
        return new DeleteNetworkingFlexCostAllocationPoliciesResponse($result->toArray());
    }
}
