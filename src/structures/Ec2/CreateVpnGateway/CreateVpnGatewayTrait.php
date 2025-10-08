<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnGateway;

trait CreateVpnGatewayTrait
{
    /**
     * @param CreateVpnGatewayRequest $args
     * @return CreateVpnGatewayResponse
     */
    public function createVpnGateway(CreateVpnGatewayRequest $args)
    {
        $result = parent::createVpnGateway($args->toArray());
        return new CreateVpnGatewayResponse($result->toArray());
    }
}
