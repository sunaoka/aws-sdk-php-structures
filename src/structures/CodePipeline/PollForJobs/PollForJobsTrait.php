<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PollForJobs;

trait PollForJobsTrait
{
    /**
     * @param PollForJobsRequest $args
     * @return PollForJobsResponse
     */
    public function pollForJobs(PollForJobsRequest $args)
    {
        $result = parent::pollForJobs($args->toArray());
        return new PollForJobsResponse($result->toArray());
    }
}
