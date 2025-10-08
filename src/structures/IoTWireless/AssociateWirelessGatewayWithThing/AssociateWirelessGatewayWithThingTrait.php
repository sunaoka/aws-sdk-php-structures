<?php

namespace Sunaoka\Aws\Structures\IoTWireless\AssociateWirelessGatewayWithThing;

trait AssociateWirelessGatewayWithThingTrait
{
    /**
     * @param AssociateWirelessGatewayWithThingRequest $args
     * @return AssociateWirelessGatewayWithThingResponse
     */
    public function associateWirelessGatewayWithThing(AssociateWirelessGatewayWithThingRequest $args)
    {
        $result = parent::associateWirelessGatewayWithThing($args->toArray());
        return new AssociateWirelessGatewayWithThingResponse($result->toArray());
    }
}
