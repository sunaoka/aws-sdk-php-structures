<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeProcessingJob;

trait DescribeProcessingJobTrait
{
    /**
     * @param DescribeProcessingJobRequest $args
     * @return DescribeProcessingJobResponse
     */
    public function describeProcessingJob(DescribeProcessingJobRequest $args)
    {
        $result = parent::describeProcessingJob($args->toArray());
        return new DescribeProcessingJobResponse($result->toArray());
    }
}
