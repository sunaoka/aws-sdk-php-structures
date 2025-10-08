<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribePublicIpv4Pools;

trait DescribePublicIpv4PoolsTrait
{
    /**
     * @param DescribePublicIpv4PoolsRequest $args
     * @return DescribePublicIpv4PoolsResponse
     */
    public function describePublicIpv4Pools(DescribePublicIpv4PoolsRequest $args)
    {
        $result = parent::describePublicIpv4Pools($args->toArray());
        return new DescribePublicIpv4PoolsResponse($result->toArray());
    }
}
