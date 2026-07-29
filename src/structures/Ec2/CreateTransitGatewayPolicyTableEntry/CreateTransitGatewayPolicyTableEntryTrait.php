<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayPolicyTableEntry;

trait CreateTransitGatewayPolicyTableEntryTrait
{
    /**
     * @param CreateTransitGatewayPolicyTableEntryRequest $args
     * @return CreateTransitGatewayPolicyTableEntryResponse
     */
    public function createTransitGatewayPolicyTableEntry(CreateTransitGatewayPolicyTableEntryRequest $args)
    {
        $result = parent::createTransitGatewayPolicyTableEntry($args->toArray());
        return new CreateTransitGatewayPolicyTableEntryResponse($result->toArray());
    }
}
