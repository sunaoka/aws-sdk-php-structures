<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayConnectPeers;

trait DescribeTransitGatewayConnectPeersTrait
{
    /**
     * @param DescribeTransitGatewayConnectPeersRequest $args
     * @return DescribeTransitGatewayConnectPeersResponse
     */
    public function describeTransitGatewayConnectPeers(DescribeTransitGatewayConnectPeersRequest $args)
    {
        $result = parent::describeTransitGatewayConnectPeers($args->toArray());
        return new DescribeTransitGatewayConnectPeersResponse($result->toArray());
    }
}
