<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopSentimentDetectionJob;

trait StopSentimentDetectionJobTrait
{
    /**
     * @param StopSentimentDetectionJobRequest $args
     * @return StopSentimentDetectionJobResponse
     */
    public function stopSentimentDetectionJob(StopSentimentDetectionJobRequest $args)
    {
        $result = parent::stopSentimentDetectionJob($args->toArray());
        return new StopSentimentDetectionJobResponse($result->toArray());
    }
}
