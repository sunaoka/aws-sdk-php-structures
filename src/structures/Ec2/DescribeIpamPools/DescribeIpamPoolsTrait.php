<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamPools;

trait DescribeIpamPoolsTrait
{
    /**
     * @param DescribeIpamPoolsRequest $args
     * @return DescribeIpamPoolsResponse
     */
    public function describeIpamPools(DescribeIpamPoolsRequest $args)
    {
        $result = parent::describeIpamPools($args->toArray());
        return new DescribeIpamPoolsResponse($result->toArray());
    }
}
