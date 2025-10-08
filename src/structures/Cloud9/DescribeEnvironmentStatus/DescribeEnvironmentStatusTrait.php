<?php

namespace Sunaoka\Aws\Structures\Cloud9\DescribeEnvironmentStatus;

trait DescribeEnvironmentStatusTrait
{
    /**
     * @param DescribeEnvironmentStatusRequest $args
     * @return DescribeEnvironmentStatusResponse
     */
    public function describeEnvironmentStatus(DescribeEnvironmentStatusRequest $args)
    {
        $result = parent::describeEnvironmentStatus($args->toArray());
        return new DescribeEnvironmentStatusResponse($result->toArray());
    }
}
