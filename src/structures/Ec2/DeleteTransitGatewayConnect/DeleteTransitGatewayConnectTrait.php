<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayConnect;

trait DeleteTransitGatewayConnectTrait
{
    /**
     * @param DeleteTransitGatewayConnectRequest $args
     * @return DeleteTransitGatewayConnectResponse
     */
    public function deleteTransitGatewayConnect(DeleteTransitGatewayConnectRequest $args)
    {
        $result = parent::deleteTransitGatewayConnect($args->toArray());
        return new DeleteTransitGatewayConnectResponse($result->toArray());
    }
}
