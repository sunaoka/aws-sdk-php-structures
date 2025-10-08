<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdMappingJob;

trait GetIdMappingJobTrait
{
    /**
     * @param GetIdMappingJobRequest $args
     * @return GetIdMappingJobResponse
     */
    public function getIdMappingJob(GetIdMappingJobRequest $args)
    {
        $result = parent::getIdMappingJob($args->toArray());
        return new GetIdMappingJobResponse($result->toArray());
    }
}
