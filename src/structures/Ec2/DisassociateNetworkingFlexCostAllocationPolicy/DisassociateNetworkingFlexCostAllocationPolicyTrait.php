<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateNetworkingFlexCostAllocationPolicy;

trait DisassociateNetworkingFlexCostAllocationPolicyTrait
{
    /**
     * @param DisassociateNetworkingFlexCostAllocationPolicyRequest $args
     * @return DisassociateNetworkingFlexCostAllocationPolicyResponse
     */
    public function disassociateNetworkingFlexCostAllocationPolicy(DisassociateNetworkingFlexCostAllocationPolicyRequest $args)
    {
        $result = parent::disassociateNetworkingFlexCostAllocationPolicy($args->toArray());
        return new DisassociateNetworkingFlexCostAllocationPolicyResponse($result->toArray());
    }
}
