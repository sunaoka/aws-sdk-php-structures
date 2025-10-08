<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DisassociateWirelessGatewayFromThing;

trait DisassociateWirelessGatewayFromThingTrait
{
    /**
     * @param DisassociateWirelessGatewayFromThingRequest $args
     * @return DisassociateWirelessGatewayFromThingResponse
     */
    public function disassociateWirelessGatewayFromThing(DisassociateWirelessGatewayFromThingRequest $args)
    {
        $result = parent::disassociateWirelessGatewayFromThing($args->toArray());
        return new DisassociateWirelessGatewayFromThingResponse($result->toArray());
    }
}
