<?php

namespace Sunaoka\Aws\Structures\ControlTower\ResetLandingZone;

trait ResetLandingZoneTrait
{
    /**
     * @param ResetLandingZoneRequest $args
     * @return ResetLandingZoneResponse
     */
    public function resetLandingZone(ResetLandingZoneRequest $args)
    {
        $result = parent::resetLandingZone($args->toArray());
        return new ResetLandingZoneResponse($result->toArray());
    }
}
