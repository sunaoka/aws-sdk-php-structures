<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeTableRestoreStatus;

trait DescribeTableRestoreStatusTrait
{
    /**
     * @param DescribeTableRestoreStatusRequest $args
     * @return DescribeTableRestoreStatusResponse
     */
    public function describeTableRestoreStatus(DescribeTableRestoreStatusRequest $args)
    {
        $result = parent::describeTableRestoreStatus($args->toArray());
        return new DescribeTableRestoreStatusResponse($result->toArray());
    }
}
