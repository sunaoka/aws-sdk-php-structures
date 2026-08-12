<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDescribeUserLimits;

trait BatchDescribeUserLimitsTrait
{
    /**
     * @param BatchDescribeUserLimitsRequest $args
     * @return BatchDescribeUserLimitsResponse
     */
    public function batchDescribeUserLimits(BatchDescribeUserLimitsRequest $args)
    {
        $result = parent::batchDescribeUserLimits($args->toArray());
        return new BatchDescribeUserLimitsResponse($result->toArray());
    }
}
