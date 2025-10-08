<?php

namespace Sunaoka\Aws\Structures\LocationService\PutGeofence;

trait PutGeofenceTrait
{
    /**
     * @param PutGeofenceRequest $args
     * @return PutGeofenceResponse
     */
    public function putGeofence(PutGeofenceRequest $args)
    {
        $result = parent::putGeofence($args->toArray());
        return new PutGeofenceResponse($result->toArray());
    }
}
