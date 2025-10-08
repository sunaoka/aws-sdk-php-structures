<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeServiceJob;

trait DescribeServiceJobTrait
{
    /**
     * @param DescribeServiceJobRequest $args
     * @return DescribeServiceJobResponse
     */
    public function describeServiceJob(DescribeServiceJobRequest $args)
    {
        $result = parent::describeServiceJob($args->toArray());
        return new DescribeServiceJobResponse($result->toArray());
    }
}
