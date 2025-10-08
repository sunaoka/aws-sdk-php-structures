<?php

namespace Sunaoka\Aws\Structures\ControlTower\DeleteLandingZone;

trait DeleteLandingZoneTrait
{
    /**
     * @param DeleteLandingZoneRequest $args
     * @return DeleteLandingZoneResponse
     */
    public function deleteLandingZone(DeleteLandingZoneRequest $args)
    {
        $result = parent::deleteLandingZone($args->toArray());
        return new DeleteLandingZoneResponse($result->toArray());
    }
}
