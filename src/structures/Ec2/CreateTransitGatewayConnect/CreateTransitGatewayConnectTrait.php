<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayConnect;

trait CreateTransitGatewayConnectTrait
{
    /**
     * @param CreateTransitGatewayConnectRequest $args
     * @return CreateTransitGatewayConnectResponse
     */
    public function createTransitGatewayConnect(CreateTransitGatewayConnectRequest $args)
    {
        $result = parent::createTransitGatewayConnect($args->toArray());
        return new CreateTransitGatewayConnectResponse($result->toArray());
    }
}
