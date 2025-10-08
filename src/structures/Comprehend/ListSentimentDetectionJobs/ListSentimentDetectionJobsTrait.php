<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListSentimentDetectionJobs;

trait ListSentimentDetectionJobsTrait
{
    /**
     * @param ListSentimentDetectionJobsRequest $args
     * @return ListSentimentDetectionJobsResponse
     */
    public function listSentimentDetectionJobs(ListSentimentDetectionJobsRequest $args)
    {
        $result = parent::listSentimentDetectionJobs($args->toArray());
        return new ListSentimentDetectionJobsResponse($result->toArray());
    }
}
