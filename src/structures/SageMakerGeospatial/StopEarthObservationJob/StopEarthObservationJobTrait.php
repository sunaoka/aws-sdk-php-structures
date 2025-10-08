<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StopEarthObservationJob;

trait StopEarthObservationJobTrait
{
    /**
     * @param StopEarthObservationJobRequest $args
     * @return StopEarthObservationJobResponse
     */
    public function stopEarthObservationJob(StopEarthObservationJobRequest $args)
    {
        $result = parent::stopEarthObservationJob($args->toArray());
        return new StopEarthObservationJobResponse($result->toArray());
    }
}
