<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayPolicyTableEntry;

trait ModifyTransitGatewayPolicyTableEntryTrait
{
    /**
     * @param ModifyTransitGatewayPolicyTableEntryRequest $args
     * @return ModifyTransitGatewayPolicyTableEntryResponse
     */
    public function modifyTransitGatewayPolicyTableEntry(ModifyTransitGatewayPolicyTableEntryRequest $args)
    {
        $result = parent::modifyTransitGatewayPolicyTableEntry($args->toArray());
        return new ModifyTransitGatewayPolicyTableEntryResponse($result->toArray());
    }
}
