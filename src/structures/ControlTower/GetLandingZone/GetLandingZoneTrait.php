<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetLandingZone;

trait GetLandingZoneTrait
{
    /**
     * @param GetLandingZoneRequest $args
     * @return GetLandingZoneResponse
     */
    public function getLandingZone(GetLandingZoneRequest $args)
    {
        $result = parent::getLandingZone($args->toArray());
        return new GetLandingZoneResponse($result->toArray());
    }
}
