<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListLandingZones;

trait ListLandingZonesTrait
{
    /**
     * @param ListLandingZonesRequest $args
     * @return ListLandingZonesResponse
     */
    public function listLandingZones(ListLandingZonesRequest $args)
    {
        $result = parent::listLandingZones($args->toArray());
        return new ListLandingZonesResponse($result->toArray());
    }
}
