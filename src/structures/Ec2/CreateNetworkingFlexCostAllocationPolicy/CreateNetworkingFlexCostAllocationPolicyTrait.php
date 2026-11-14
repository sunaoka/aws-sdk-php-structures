<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkingFlexCostAllocationPolicy;

trait CreateNetworkingFlexCostAllocationPolicyTrait
{
    /**
     * @param CreateNetworkingFlexCostAllocationPolicyRequest $args
     * @return CreateNetworkingFlexCostAllocationPolicyResponse
     */
    public function createNetworkingFlexCostAllocationPolicy(CreateNetworkingFlexCostAllocationPolicyRequest $args)
    {
        $result = parent::createNetworkingFlexCostAllocationPolicy($args->toArray());
        return new CreateNetworkingFlexCostAllocationPolicyResponse($result->toArray());
    }
}
