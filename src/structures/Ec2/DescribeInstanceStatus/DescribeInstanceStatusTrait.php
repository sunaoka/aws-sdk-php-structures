<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceStatus;

trait DescribeInstanceStatusTrait
{
    /**
     * @param DescribeInstanceStatusRequest $args
     * @return DescribeInstanceStatusResponse
     */
    public function describeInstanceStatus(DescribeInstanceStatusRequest $args)
    {
        $result = parent::describeInstanceStatus($args->toArray());
        return new DescribeInstanceStatusResponse($result->toArray());
    }
}
