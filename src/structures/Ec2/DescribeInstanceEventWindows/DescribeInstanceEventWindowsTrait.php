<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceEventWindows;

trait DescribeInstanceEventWindowsTrait
{
    /**
     * @param DescribeInstanceEventWindowsRequest $args
     * @return DescribeInstanceEventWindowsResponse
     */
    public function describeInstanceEventWindows(DescribeInstanceEventWindowsRequest $args)
    {
        $result = parent::describeInstanceEventWindows($args->toArray());
        return new DescribeInstanceEventWindowsResponse($result->toArray());
    }
}
