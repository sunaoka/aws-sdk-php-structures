<?php

namespace Sunaoka\Aws\Structures\IoTWireless\AssociateWirelessDeviceWithThing;

trait AssociateWirelessDeviceWithThingTrait
{
    /**
     * @param AssociateWirelessDeviceWithThingRequest $args
     * @return AssociateWirelessDeviceWithThingResponse
     */
    public function associateWirelessDeviceWithThing(AssociateWirelessDeviceWithThingRequest $args)
    {
        $result = parent::associateWirelessDeviceWithThing($args->toArray());
        return new AssociateWirelessDeviceWithThingResponse($result->toArray());
    }
}
