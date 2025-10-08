<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListDeviceDiscoveries;

trait ListDeviceDiscoveriesTrait
{
    /**
     * @param ListDeviceDiscoveriesRequest $args
     * @return ListDeviceDiscoveriesResponse
     */
    public function listDeviceDiscoveries(ListDeviceDiscoveriesRequest $args)
    {
        $result = parent::listDeviceDiscoveries($args->toArray());
        return new ListDeviceDiscoveriesResponse($result->toArray());
    }
}
