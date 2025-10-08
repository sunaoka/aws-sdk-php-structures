<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayPolicyTableEntries;

trait GetTransitGatewayPolicyTableEntriesTrait
{
    /**
     * @param GetTransitGatewayPolicyTableEntriesRequest $args
     * @return GetTransitGatewayPolicyTableEntriesResponse
     */
    public function getTransitGatewayPolicyTableEntries(GetTransitGatewayPolicyTableEntriesRequest $args)
    {
        $result = parent::getTransitGatewayPolicyTableEntries($args->toArray());
        return new GetTransitGatewayPolicyTableEntriesResponse($result->toArray());
    }
}
