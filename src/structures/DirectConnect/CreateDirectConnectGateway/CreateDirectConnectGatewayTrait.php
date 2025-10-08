<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateDirectConnectGateway;

trait CreateDirectConnectGatewayTrait
{
    /**
     * @param CreateDirectConnectGatewayRequest $args
     * @return CreateDirectConnectGatewayResponse
     */
    public function createDirectConnectGateway(CreateDirectConnectGatewayRequest $args)
    {
        $result = parent::createDirectConnectGateway($args->toArray());
        return new CreateDirectConnectGatewayResponse($result->toArray());
    }
}
