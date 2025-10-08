<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchDeleteGeofence;

trait BatchDeleteGeofenceTrait
{
    /**
     * @param BatchDeleteGeofenceRequest $args
     * @return BatchDeleteGeofenceResponse
     */
    public function batchDeleteGeofence(BatchDeleteGeofenceRequest $args)
    {
        $result = parent::batchDeleteGeofence($args->toArray());
        return new BatchDeleteGeofenceResponse($result->toArray());
    }
}
