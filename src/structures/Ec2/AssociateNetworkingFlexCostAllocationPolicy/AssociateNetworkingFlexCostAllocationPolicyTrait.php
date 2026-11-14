<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateNetworkingFlexCostAllocationPolicy;

trait AssociateNetworkingFlexCostAllocationPolicyTrait
{
    /**
     * @param AssociateNetworkingFlexCostAllocationPolicyRequest $args
     * @return AssociateNetworkingFlexCostAllocationPolicyResponse
     */
    public function associateNetworkingFlexCostAllocationPolicy(AssociateNetworkingFlexCostAllocationPolicyRequest $args)
    {
        $result = parent::associateNetworkingFlexCostAllocationPolicy($args->toArray());
        return new AssociateNetworkingFlexCostAllocationPolicyResponse($result->toArray());
    }
}
