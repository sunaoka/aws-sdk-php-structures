<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartTargetedSentimentDetectionJob;

trait StartTargetedSentimentDetectionJobTrait
{
    /**
     * @param StartTargetedSentimentDetectionJobRequest $args
     * @return StartTargetedSentimentDetectionJobResponse
     */
    public function startTargetedSentimentDetectionJob(StartTargetedSentimentDetectionJobRequest $args)
    {
        $result = parent::startTargetedSentimentDetectionJob($args->toArray());
        return new StartTargetedSentimentDetectionJobResponse($result->toArray());
    }
}
