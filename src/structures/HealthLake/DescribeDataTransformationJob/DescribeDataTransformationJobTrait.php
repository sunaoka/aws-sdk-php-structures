<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeDataTransformationJob;

trait DescribeDataTransformationJobTrait
{
    /**
     * @param DescribeDataTransformationJobRequest $args
     * @return DescribeDataTransformationJobResponse
     */
    public function describeDataTransformationJob(DescribeDataTransformationJobRequest $args)
    {
        $result = parent::describeDataTransformationJob($args->toArray());
        return new DescribeDataTransformationJobResponse($result->toArray());
    }
}
