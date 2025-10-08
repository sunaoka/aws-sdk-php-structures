<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockStatus;

trait DescribeCapacityBlockStatusTrait
{
    /**
     * @param DescribeCapacityBlockStatusRequest $args
     * @return DescribeCapacityBlockStatusResponse
     */
    public function describeCapacityBlockStatus(DescribeCapacityBlockStatusRequest $args)
    {
        $result = parent::describeCapacityBlockStatus($args->toArray());
        return new DescribeCapacityBlockStatusResponse($result->toArray());
    }
}
