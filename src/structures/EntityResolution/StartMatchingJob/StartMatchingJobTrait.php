<?php

namespace Sunaoka\Aws\Structures\EntityResolution\StartMatchingJob;

trait StartMatchingJobTrait
{
    /**
     * @param StartMatchingJobRequest $args
     * @return StartMatchingJobResponse
     */
    public function startMatchingJob(StartMatchingJobRequest $args)
    {
        $result = parent::startMatchingJob($args->toArray());
        return new StartMatchingJobResponse($result->toArray());
    }
}
