<?php

namespace Sunaoka\Aws\Structures\EntityResolution\StartIdMappingJob;

trait StartIdMappingJobTrait
{
    /**
     * @param StartIdMappingJobRequest $args
     * @return StartIdMappingJobResponse
     */
    public function startIdMappingJob(StartIdMappingJobRequest $args)
    {
        $result = parent::startIdMappingJob($args->toArray());
        return new StartIdMappingJobResponse($result->toArray());
    }
}
