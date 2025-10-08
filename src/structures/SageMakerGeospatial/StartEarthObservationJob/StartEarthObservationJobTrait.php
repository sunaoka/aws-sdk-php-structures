<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob;

trait StartEarthObservationJobTrait
{
    /**
     * @param StartEarthObservationJobRequest $args
     * @return StartEarthObservationJobResponse
     */
    public function startEarthObservationJob(StartEarthObservationJobRequest $args)
    {
        $result = parent::startEarthObservationJob($args->toArray());
        return new StartEarthObservationJobResponse($result->toArray());
    }
}
