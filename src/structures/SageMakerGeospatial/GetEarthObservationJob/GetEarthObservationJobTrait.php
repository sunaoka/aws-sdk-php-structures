<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob;

trait GetEarthObservationJobTrait
{
    /**
     * @param GetEarthObservationJobRequest $args
     * @return GetEarthObservationJobResponse
     */
    public function getEarthObservationJob(GetEarthObservationJobRequest $args)
    {
        $result = parent::getEarthObservationJob($args->toArray());
        return new GetEarthObservationJobResponse($result->toArray());
    }
}
