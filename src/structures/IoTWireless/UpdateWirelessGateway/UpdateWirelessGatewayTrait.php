<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessGateway;

trait UpdateWirelessGatewayTrait
{
    /**
     * @param UpdateWirelessGatewayRequest $args
     * @return UpdateWirelessGatewayResponse
     */
    public function updateWirelessGateway(UpdateWirelessGatewayRequest $args)
    {
        $result = parent::updateWirelessGateway($args->toArray());
        return new UpdateWirelessGatewayResponse($result->toArray());
    }
}
