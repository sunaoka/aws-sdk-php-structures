<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchPutGeofence;

trait BatchPutGeofenceTrait
{
    /**
     * @param BatchPutGeofenceRequest $args
     * @return BatchPutGeofenceResponse
     */
    public function batchPutGeofence(BatchPutGeofenceRequest $args)
    {
        $result = parent::batchPutGeofence($args->toArray());
        return new BatchPutGeofenceResponse($result->toArray());
    }
}
