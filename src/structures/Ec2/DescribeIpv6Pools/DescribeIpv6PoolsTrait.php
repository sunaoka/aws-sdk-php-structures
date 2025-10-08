<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpv6Pools;

trait DescribeIpv6PoolsTrait
{
    /**
     * @param DescribeIpv6PoolsRequest $args
     * @return DescribeIpv6PoolsResponse
     */
    public function describeIpv6Pools(DescribeIpv6PoolsRequest $args)
    {
        $result = parent::describeIpv6Pools($args->toArray());
        return new DescribeIpv6PoolsResponse($result->toArray());
    }
}
