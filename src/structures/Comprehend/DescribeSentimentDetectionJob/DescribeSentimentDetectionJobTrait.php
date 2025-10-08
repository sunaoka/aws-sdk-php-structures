<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeSentimentDetectionJob;

trait DescribeSentimentDetectionJobTrait
{
    /**
     * @param DescribeSentimentDetectionJobRequest $args
     * @return DescribeSentimentDetectionJobResponse
     */
    public function describeSentimentDetectionJob(DescribeSentimentDetectionJobRequest $args)
    {
        $result = parent::describeSentimentDetectionJob($args->toArray());
        return new DescribeSentimentDetectionJobResponse($result->toArray());
    }
}
