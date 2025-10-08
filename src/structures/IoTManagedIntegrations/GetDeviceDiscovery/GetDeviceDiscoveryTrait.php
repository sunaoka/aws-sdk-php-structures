<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetDeviceDiscovery;

trait GetDeviceDiscoveryTrait
{
    /**
     * @param GetDeviceDiscoveryRequest $args
     * @return GetDeviceDiscoveryResponse
     */
    public function getDeviceDiscovery(GetDeviceDiscoveryRequest $args)
    {
        $result = parent::getDeviceDiscovery($args->toArray());
        return new GetDeviceDiscoveryResponse($result->toArray());
    }
}
