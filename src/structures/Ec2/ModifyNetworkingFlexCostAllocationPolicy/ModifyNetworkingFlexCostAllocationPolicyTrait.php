<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyNetworkingFlexCostAllocationPolicy;

trait ModifyNetworkingFlexCostAllocationPolicyTrait
{
    /**
     * @param ModifyNetworkingFlexCostAllocationPolicyRequest $args
     * @return ModifyNetworkingFlexCostAllocationPolicyResponse
     */
    public function modifyNetworkingFlexCostAllocationPolicy(ModifyNetworkingFlexCostAllocationPolicyRequest $args)
    {
        $result = parent::modifyNetworkingFlexCostAllocationPolicy($args->toArray());
        return new ModifyNetworkingFlexCostAllocationPolicyResponse($result->toArray());
    }
}
