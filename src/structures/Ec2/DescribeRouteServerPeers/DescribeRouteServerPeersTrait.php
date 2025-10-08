<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRouteServerPeers;

trait DescribeRouteServerPeersTrait
{
    /**
     * @param DescribeRouteServerPeersRequest $args
     * @return DescribeRouteServerPeersResponse
     */
    public function describeRouteServerPeers(DescribeRouteServerPeersRequest $args)
    {
        $result = parent::describeRouteServerPeers($args->toArray());
        return new DescribeRouteServerPeersResponse($result->toArray());
    }
}
