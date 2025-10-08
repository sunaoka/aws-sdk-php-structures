<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopTargetedSentimentDetectionJob;

trait StopTargetedSentimentDetectionJobTrait
{
    /**
     * @param StopTargetedSentimentDetectionJobRequest $args
     * @return StopTargetedSentimentDetectionJobResponse
     */
    public function stopTargetedSentimentDetectionJob(StopTargetedSentimentDetectionJobRequest $args)
    {
        $result = parent::stopTargetedSentimentDetectionJob($args->toArray());
        return new StopTargetedSentimentDetectionJobResponse($result->toArray());
    }
}
