<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayMeteringPolicyEntries;

trait GetTransitGatewayMeteringPolicyEntriesTrait
{
    /**
     * @param GetTransitGatewayMeteringPolicyEntriesRequest $args
     * @return GetTransitGatewayMeteringPolicyEntriesResponse
     */
    public function getTransitGatewayMeteringPolicyEntries(GetTransitGatewayMeteringPolicyEntriesRequest $args)
    {
        $result = parent::getTransitGatewayMeteringPolicyEntries($args->toArray());
        return new GetTransitGatewayMeteringPolicyEntriesResponse($result->toArray());
    }
}
