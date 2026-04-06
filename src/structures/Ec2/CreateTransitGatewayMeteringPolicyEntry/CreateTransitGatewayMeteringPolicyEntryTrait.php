<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayMeteringPolicyEntry;

trait CreateTransitGatewayMeteringPolicyEntryTrait
{
    /**
     * @param CreateTransitGatewayMeteringPolicyEntryRequest $args
     * @return CreateTransitGatewayMeteringPolicyEntryResponse
     */
    public function createTransitGatewayMeteringPolicyEntry(CreateTransitGatewayMeteringPolicyEntryRequest $args)
    {
        $result = parent::createTransitGatewayMeteringPolicyEntry($args->toArray());
        return new CreateTransitGatewayMeteringPolicyEntryResponse($result->toArray());
    }
}
