<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ExportEarthObservationJob;

trait ExportEarthObservationJobTrait
{
    /**
     * @param ExportEarthObservationJobRequest $args
     * @return ExportEarthObservationJobResponse
     */
    public function exportEarthObservationJob(ExportEarthObservationJobRequest $args)
    {
        $result = parent::exportEarthObservationJob($args->toArray());
        return new ExportEarthObservationJobResponse($result->toArray());
    }
}
