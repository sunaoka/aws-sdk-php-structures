<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEdgePackagingJob;

trait DescribeEdgePackagingJobTrait
{
    /**
     * @param DescribeEdgePackagingJobRequest $args
     * @return DescribeEdgePackagingJobResponse
     */
    public function describeEdgePackagingJob(DescribeEdgePackagingJobRequest $args)
    {
        $result = parent::describeEdgePackagingJob($args->toArray());
        return new DescribeEdgePackagingJobResponse($result->toArray());
    }
}
