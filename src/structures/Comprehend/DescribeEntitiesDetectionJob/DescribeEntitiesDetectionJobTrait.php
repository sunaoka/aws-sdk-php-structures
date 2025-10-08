<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeEntitiesDetectionJob;

trait DescribeEntitiesDetectionJobTrait
{
    /**
     * @param DescribeEntitiesDetectionJobRequest $args
     * @return DescribeEntitiesDetectionJobResponse
     */
    public function describeEntitiesDetectionJob(DescribeEntitiesDetectionJobRequest $args)
    {
        $result = parent::describeEntitiesDetectionJob($args->toArray());
        return new DescribeEntitiesDetectionJobResponse($result->toArray());
    }
}
