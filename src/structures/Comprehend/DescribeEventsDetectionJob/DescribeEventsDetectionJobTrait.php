<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeEventsDetectionJob;

trait DescribeEventsDetectionJobTrait
{
    /**
     * @param DescribeEventsDetectionJobRequest $args
     * @return DescribeEventsDetectionJobResponse
     */
    public function describeEventsDetectionJob(DescribeEventsDetectionJobRequest $args)
    {
        $result = parent::describeEventsDetectionJob($args->toArray());
        return new DescribeEventsDetectionJobResponse($result->toArray());
    }
}
