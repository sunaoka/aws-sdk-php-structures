<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayMeteringPolicyEntry;

trait DeleteTransitGatewayMeteringPolicyEntryTrait
{
    /**
     * @param DeleteTransitGatewayMeteringPolicyEntryRequest $args
     * @return DeleteTransitGatewayMeteringPolicyEntryResponse
     */
    public function deleteTransitGatewayMeteringPolicyEntry(DeleteTransitGatewayMeteringPolicyEntryRequest $args)
    {
        $result = parent::deleteTransitGatewayMeteringPolicyEntry($args->toArray());
        return new DeleteTransitGatewayMeteringPolicyEntryResponse($result->toArray());
    }
}
