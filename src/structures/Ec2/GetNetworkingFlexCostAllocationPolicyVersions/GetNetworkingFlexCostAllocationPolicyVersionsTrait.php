<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkingFlexCostAllocationPolicyVersions;

trait GetNetworkingFlexCostAllocationPolicyVersionsTrait
{
    /**
     * @param GetNetworkingFlexCostAllocationPolicyVersionsRequest $args
     * @return GetNetworkingFlexCostAllocationPolicyVersionsResponse
     */
    public function getNetworkingFlexCostAllocationPolicyVersions(GetNetworkingFlexCostAllocationPolicyVersionsRequest $args)
    {
        $result = parent::getNetworkingFlexCostAllocationPolicyVersions($args->toArray());
        return new GetNetworkingFlexCostAllocationPolicyVersionsResponse($result->toArray());
    }
}
