<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartSentimentDetectionJob;

trait StartSentimentDetectionJobTrait
{
    /**
     * @param StartSentimentDetectionJobRequest $args
     * @return StartSentimentDetectionJobResponse
     */
    public function startSentimentDetectionJob(StartSentimentDetectionJobRequest $args)
    {
        $result = parent::startSentimentDetectionJob($args->toArray());
        return new StartSentimentDetectionJobResponse($result->toArray());
    }
}
