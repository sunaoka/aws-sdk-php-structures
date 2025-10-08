<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointConnections;

trait DescribeVpcEndpointConnectionsTrait
{
    /**
     * @param DescribeVpcEndpointConnectionsRequest $args
     * @return DescribeVpcEndpointConnectionsResponse
     */
    public function describeVpcEndpointConnections(DescribeVpcEndpointConnectionsRequest $args)
    {
        $result = parent::describeVpcEndpointConnections($args->toArray());
        return new DescribeVpcEndpointConnectionsResponse($result->toArray());
    }
}
