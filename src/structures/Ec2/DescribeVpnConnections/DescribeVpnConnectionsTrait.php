<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpnConnections;

trait DescribeVpnConnectionsTrait
{
    /**
     * @param DescribeVpnConnectionsRequest $args
     * @return DescribeVpnConnectionsResponse
     */
    public function describeVpnConnections(DescribeVpnConnectionsRequest $args)
    {
        $result = parent::describeVpnConnections($args->toArray());
        return new DescribeVpnConnectionsResponse($result->toArray());
    }
}
