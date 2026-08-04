<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeApplicationStatus;

trait DescribeApplicationStatusTrait
{
    /**
     * @param DescribeApplicationStatusRequest $args
     * @return DescribeApplicationStatusResponse
     */
    public function describeApplicationStatus(DescribeApplicationStatusRequest $args)
    {
        $result = parent::describeApplicationStatus($args->toArray());
        return new DescribeApplicationStatusResponse($result->toArray());
    }
}
