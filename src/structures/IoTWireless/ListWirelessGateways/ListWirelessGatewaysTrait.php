<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessGateways;

trait ListWirelessGatewaysTrait
{
    /**
     * @param ListWirelessGatewaysRequest $args
     * @return ListWirelessGatewaysResponse
     */
    public function listWirelessGateways(ListWirelessGatewaysRequest $args)
    {
        $result = parent::listWirelessGateways($args->toArray());
        return new ListWirelessGatewaysResponse($result->toArray());
    }
}
