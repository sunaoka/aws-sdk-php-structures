<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchEvaluateGeofences;

trait BatchEvaluateGeofencesTrait
{
    /**
     * @param BatchEvaluateGeofencesRequest $args
     * @return BatchEvaluateGeofencesResponse
     */
    public function batchEvaluateGeofences(BatchEvaluateGeofencesRequest $args)
    {
        $result = parent::batchEvaluateGeofences($args->toArray());
        return new BatchEvaluateGeofencesResponse($result->toArray());
    }
}
