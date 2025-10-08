<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpams;

trait DescribeIpamsTrait
{
    /**
     * @param DescribeIpamsRequest $args
     * @return DescribeIpamsResponse
     */
    public function describeIpams(DescribeIpamsRequest $args)
    {
        $result = parent::describeIpams($args->toArray());
        return new DescribeIpamsResponse($result->toArray());
    }
}
