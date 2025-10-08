<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob;

trait DescribeAutoMLJobTrait
{
    /**
     * @param DescribeAutoMLJobRequest $args
     * @return DescribeAutoMLJobResponse
     */
    public function describeAutoMLJob(DescribeAutoMLJobRequest $args)
    {
        $result = parent::describeAutoMLJob($args->toArray());
        return new DescribeAutoMLJobResponse($result->toArray());
    }
}
