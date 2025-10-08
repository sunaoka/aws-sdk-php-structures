<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnConnections;

trait DescribeClientVpnConnectionsTrait
{
    /**
     * @param DescribeClientVpnConnectionsRequest $args
     * @return DescribeClientVpnConnectionsResponse
     */
    public function describeClientVpnConnections(DescribeClientVpnConnectionsRequest $args)
    {
        $result = parent::describeClientVpnConnections($args->toArray());
        return new DescribeClientVpnConnectionsResponse($result->toArray());
    }
}
