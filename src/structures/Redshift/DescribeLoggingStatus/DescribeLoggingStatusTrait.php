<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeLoggingStatus;

trait DescribeLoggingStatusTrait
{
    /**
     * @param DescribeLoggingStatusRequest $args
     * @return DescribeLoggingStatusResponse
     */
    public function describeLoggingStatus(DescribeLoggingStatusRequest $args)
    {
        $result = parent::describeLoggingStatus($args->toArray());
        return new DescribeLoggingStatusResponse($result->toArray());
    }
}
