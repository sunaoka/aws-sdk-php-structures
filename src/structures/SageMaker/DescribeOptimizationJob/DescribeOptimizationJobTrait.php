<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeOptimizationJob;

trait DescribeOptimizationJobTrait
{
    /**
     * @param DescribeOptimizationJobRequest $args
     * @return DescribeOptimizationJobResponse
     */
    public function describeOptimizationJob(DescribeOptimizationJobRequest $args)
    {
        $result = parent::describeOptimizationJob($args->toArray());
        return new DescribeOptimizationJobResponse($result->toArray());
    }
}
