<?php

namespace Sunaoka\Aws\Structures\LocationService\GetGeofence;

trait GetGeofenceTrait
{
    /**
     * @param GetGeofenceRequest $args
     * @return GetGeofenceResponse
     */
    public function getGeofence(GetGeofenceRequest $args)
    {
        $result = parent::getGeofence($args->toArray());
        return new GetGeofenceResponse($result->toArray());
    }
}
