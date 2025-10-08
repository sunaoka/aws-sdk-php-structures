<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingJob;

trait GetMatchingJobTrait
{
    /**
     * @param GetMatchingJobRequest $args
     * @return GetMatchingJobResponse
     */
    public function getMatchingJob(GetMatchingJobRequest $args)
    {
        $result = parent::getMatchingJob($args->toArray());
        return new GetMatchingJobResponse($result->toArray());
    }
}
