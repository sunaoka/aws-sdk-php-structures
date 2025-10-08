<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamResourceDiscoveries;

trait DescribeIpamResourceDiscoveriesTrait
{
    /**
     * @param DescribeIpamResourceDiscoveriesRequest $args
     * @return DescribeIpamResourceDiscoveriesResponse
     */
    public function describeIpamResourceDiscoveries(DescribeIpamResourceDiscoveriesRequest $args)
    {
        $result = parent::describeIpamResourceDiscoveries($args->toArray());
        return new DescribeIpamResourceDiscoveriesResponse($result->toArray());
    }
}
