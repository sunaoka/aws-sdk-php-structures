<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayPolicyTableEntry;

trait DeleteTransitGatewayPolicyTableEntryTrait
{
    /**
     * @param DeleteTransitGatewayPolicyTableEntryRequest $args
     * @return DeleteTransitGatewayPolicyTableEntryResponse
     */
    public function deleteTransitGatewayPolicyTableEntry(DeleteTransitGatewayPolicyTableEntryRequest $args)
    {
        $result = parent::deleteTransitGatewayPolicyTableEntry($args->toArray());
        return new DeleteTransitGatewayPolicyTableEntryResponse($result->toArray());
    }
}
