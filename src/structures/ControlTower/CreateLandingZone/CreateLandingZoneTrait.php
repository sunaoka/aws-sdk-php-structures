<?php

namespace Sunaoka\Aws\Structures\ControlTower\CreateLandingZone;

trait CreateLandingZoneTrait
{
    /**
     * @param CreateLandingZoneRequest $args
     * @return CreateLandingZoneResponse
     */
    public function createLandingZone(CreateLandingZoneRequest $args)
    {
        $result = parent::createLandingZone($args->toArray());
        return new CreateLandingZoneResponse($result->toArray());
    }
}
