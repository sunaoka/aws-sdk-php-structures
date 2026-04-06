<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\StartDeviceDiscovery;

trait StartDeviceDiscoveryTrait
{
    /**
     * @param StartDeviceDiscoveryRequest $args
     * @return StartDeviceDiscoveryResponse
     */
    public function startDeviceDiscovery(StartDeviceDiscoveryRequest $args)
    {
        $result = parent::startDeviceDiscovery($args->toArray());
        return new StartDeviceDiscoveryResponse($result->toArray());
    }
}
