<?php

namespace Sunaoka\Aws\Structures\HealthLake\StartDataTransformationJob;

trait StartDataTransformationJobTrait
{
    /**
     * @param StartDataTransformationJobRequest $args
     * @return StartDataTransformationJobResponse
     */
    public function startDataTransformationJob(StartDataTransformationJobRequest $args)
    {
        $result = parent::startDataTransformationJob($args->toArray());
        return new StartDataTransformationJobResponse($result->toArray());
    }
}
