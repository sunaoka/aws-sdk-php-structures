<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DisassociateWirelessDeviceFromThing;

trait DisassociateWirelessDeviceFromThingTrait
{
    /**
     * @param DisassociateWirelessDeviceFromThingRequest $args
     * @return DisassociateWirelessDeviceFromThingResponse
     */
    public function disassociateWirelessDeviceFromThing(DisassociateWirelessDeviceFromThingRequest $args)
    {
        $result = parent::disassociateWirelessDeviceFromThing($args->toArray());
        return new DisassociateWirelessDeviceFromThingResponse($result->toArray());
    }
}
