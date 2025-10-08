<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeTargetedSentimentDetectionJob;

trait DescribeTargetedSentimentDetectionJobTrait
{
    /**
     * @param DescribeTargetedSentimentDetectionJobRequest $args
     * @return DescribeTargetedSentimentDetectionJobResponse
     */
    public function describeTargetedSentimentDetectionJob(DescribeTargetedSentimentDetectionJobRequest $args)
    {
        $result = parent::describeTargetedSentimentDetectionJob($args->toArray());
        return new DescribeTargetedSentimentDetectionJobResponse($result->toArray());
    }
}
