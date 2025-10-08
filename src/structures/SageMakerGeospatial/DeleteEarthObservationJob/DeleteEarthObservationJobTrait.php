<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\DeleteEarthObservationJob;

trait DeleteEarthObservationJobTrait
{
    /**
     * @param DeleteEarthObservationJobRequest $args
     * @return DeleteEarthObservationJobResponse
     */
    public function deleteEarthObservationJob(DeleteEarthObservationJobRequest $args)
    {
        $result = parent::deleteEarthObservationJob($args->toArray());
        return new DeleteEarthObservationJobResponse($result->toArray());
    }
}
