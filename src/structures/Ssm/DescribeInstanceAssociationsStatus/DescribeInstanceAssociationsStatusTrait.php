<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceAssociationsStatus;

trait DescribeInstanceAssociationsStatusTrait
{
    /**
     * @param DescribeInstanceAssociationsStatusRequest $args
     * @return DescribeInstanceAssociationsStatusResponse
     */
    public function describeInstanceAssociationsStatus(DescribeInstanceAssociationsStatusRequest $args)
    {
        $result = parent::describeInstanceAssociationsStatus($args->toArray());
        return new DescribeInstanceAssociationsStatusResponse($result->toArray());
    }
}
