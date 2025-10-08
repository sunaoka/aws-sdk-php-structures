<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessGateway;

trait CreateWirelessGatewayTrait
{
    /**
     * @param CreateWirelessGatewayRequest $args
     * @return CreateWirelessGatewayResponse
     */
    public function createWirelessGateway(CreateWirelessGatewayRequest $args)
    {
        $result = parent::createWirelessGateway($args->toArray());
        return new CreateWirelessGatewayResponse($result->toArray());
    }
}
