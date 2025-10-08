<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJob;

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
