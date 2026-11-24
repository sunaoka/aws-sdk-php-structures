<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeClusterPeers;

trait DescribeClusterPeersTrait
{
    /**
     * @param DescribeClusterPeersRequest $args
     * @return DescribeClusterPeersResponse
     */
    public function describeClusterPeers(DescribeClusterPeersRequest $args)
    {
        $result = parent::describeClusterPeers($args->toArray());
        return new DescribeClusterPeersResponse($result->toArray());
    }
}
