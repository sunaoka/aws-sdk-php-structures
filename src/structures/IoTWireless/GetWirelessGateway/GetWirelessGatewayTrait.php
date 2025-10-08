<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGateway;

trait GetWirelessGatewayTrait
{
    /**
     * @param GetWirelessGatewayRequest $args
     * @return GetWirelessGatewayResponse
     */
    public function getWirelessGateway(GetWirelessGatewayRequest $args)
    {
        $result = parent::getWirelessGateway($args->toArray());
        return new GetWirelessGatewayResponse($result->toArray());
    }
}
