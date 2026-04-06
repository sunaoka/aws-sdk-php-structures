<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetManagedThingCapabilities;

trait GetManagedThingCapabilitiesTrait
{
    /**
     * @param GetManagedThingCapabilitiesRequest $args
     * @return GetManagedThingCapabilitiesResponse
     */
    public function getManagedThingCapabilities(GetManagedThingCapabilitiesRequest $args)
    {
        $result = parent::getManagedThingCapabilities($args->toArray());
        return new GetManagedThingCapabilitiesResponse($result->toArray());
    }
}
