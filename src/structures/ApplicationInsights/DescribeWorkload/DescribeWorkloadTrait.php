<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeWorkload;

trait DescribeWorkloadTrait
{
    /**
     * @param DescribeWorkloadRequest $args
     * @return DescribeWorkloadResponse
     */
    public function describeWorkload(DescribeWorkloadRequest $args)
    {
        $result = parent::describeWorkload($args->toArray());
        return new DescribeWorkloadResponse($result->toArray());
    }
}
