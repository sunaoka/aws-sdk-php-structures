<?php

namespace Sunaoka\Aws\Structures\ControlTower\UpdateLandingZone;

trait UpdateLandingZoneTrait
{
    /**
     * @param UpdateLandingZoneRequest $args
     * @return UpdateLandingZoneResponse
     */
    public function updateLandingZone(UpdateLandingZoneRequest $args)
    {
        $result = parent::updateLandingZone($args->toArray());
        return new UpdateLandingZoneResponse($result->toArray());
    }
}
