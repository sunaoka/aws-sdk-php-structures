<?php

namespace Sunaoka\Aws\Structures\CloudHsm\ListAvailableZones;

trait ListAvailableZonesTrait
{
    /**
     * @param ListAvailableZonesRequest $args
     * @return ListAvailableZonesResponse
     */
    public function listAvailableZones(ListAvailableZonesRequest $args)
    {
        $result = parent::listAvailableZones($args->toArray());
        return new ListAvailableZonesResponse($result->toArray());
    }
}
