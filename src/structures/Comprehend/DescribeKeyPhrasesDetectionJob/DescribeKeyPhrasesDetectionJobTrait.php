<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeKeyPhrasesDetectionJob;

trait DescribeKeyPhrasesDetectionJobTrait
{
    /**
     * @param DescribeKeyPhrasesDetectionJobRequest $args
     * @return DescribeKeyPhrasesDetectionJobResponse
     */
    public function describeKeyPhrasesDetectionJob(DescribeKeyPhrasesDetectionJobRequest $args)
    {
        $result = parent::describeKeyPhrasesDetectionJob($args->toArray());
        return new DescribeKeyPhrasesDetectionJobResponse($result->toArray());
    }
}
