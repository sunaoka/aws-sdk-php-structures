<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTransformJob;

trait DescribeTransformJobTrait
{
    /**
     * @param DescribeTransformJobRequest $args
     * @return DescribeTransformJobResponse
     */
    public function describeTransformJob(DescribeTransformJobRequest $args)
    {
        $result = parent::describeTransformJob($args->toArray());
        return new DescribeTransformJobResponse($result->toArray());
    }
}
