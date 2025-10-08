<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessDevices;

trait ListWirelessDevicesTrait
{
    /**
     * @param ListWirelessDevicesRequest $args
     * @return ListWirelessDevicesResponse
     */
    public function listWirelessDevices(ListWirelessDevicesRequest $args)
    {
        $result = parent::listWirelessDevices($args->toArray());
        return new ListWirelessDevicesResponse($result->toArray());
    }
}
