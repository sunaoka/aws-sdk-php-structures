<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeTopicsDetectionJob;

trait DescribeTopicsDetectionJobTrait
{
    /**
     * @param DescribeTopicsDetectionJobRequest $args
     * @return DescribeTopicsDetectionJobResponse
     */
    public function describeTopicsDetectionJob(DescribeTopicsDetectionJobRequest $args)
    {
        $result = parent::describeTopicsDetectionJob($args->toArray());
        return new DescribeTopicsDetectionJobResponse($result->toArray());
    }
}
