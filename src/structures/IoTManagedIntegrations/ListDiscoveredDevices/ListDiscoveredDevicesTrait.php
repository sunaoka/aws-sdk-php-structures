<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListDiscoveredDevices;

trait ListDiscoveredDevicesTrait
{
    /**
     * @param ListDiscoveredDevicesRequest $args
     * @return ListDiscoveredDevicesResponse
     */
    public function listDiscoveredDevices(ListDiscoveredDevicesRequest $args)
    {
        $result = parent::listDiscoveredDevices($args->toArray());
        return new ListDiscoveredDevicesResponse($result->toArray());
    }
}
