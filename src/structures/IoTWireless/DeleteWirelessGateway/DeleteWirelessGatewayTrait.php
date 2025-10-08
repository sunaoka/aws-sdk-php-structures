<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteWirelessGateway;

trait DeleteWirelessGatewayTrait
{
    /**
     * @param DeleteWirelessGatewayRequest $args
     * @return DeleteWirelessGatewayResponse
     */
    public function deleteWirelessGateway(DeleteWirelessGatewayRequest $args)
    {
        $result = parent::deleteWirelessGateway($args->toArray());
        return new DeleteWirelessGatewayResponse($result->toArray());
    }
}
