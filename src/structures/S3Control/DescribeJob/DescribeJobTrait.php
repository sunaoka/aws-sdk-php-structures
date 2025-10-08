<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob;

trait DescribeJobTrait
{
    /**
     * @param DescribeJobRequest $args
     * @return DescribeJobResponse
     */
    public function describeJob(DescribeJobRequest $args)
    {
        $result = parent::describeJob($args->toArray());
        return new DescribeJobResponse($result->toArray());
    }
}
