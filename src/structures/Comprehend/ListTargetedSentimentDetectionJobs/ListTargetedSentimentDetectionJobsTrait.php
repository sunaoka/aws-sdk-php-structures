<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListTargetedSentimentDetectionJobs;

trait ListTargetedSentimentDetectionJobsTrait
{
    /**
     * @param ListTargetedSentimentDetectionJobsRequest $args
     * @return ListTargetedSentimentDetectionJobsResponse
     */
    public function listTargetedSentimentDetectionJobs(ListTargetedSentimentDetectionJobsRequest $args)
    {
        $result = parent::listTargetedSentimentDetectionJobs($args->toArray());
        return new ListTargetedSentimentDetectionJobsResponse($result->toArray());
    }
}
