<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeVpcPeeringConnections;

trait DescribeVpcPeeringConnectionsTrait
{
    /**
     * @param DescribeVpcPeeringConnectionsRequest $args
     * @return DescribeVpcPeeringConnectionsResponse
     */
    public function describeVpcPeeringConnections(DescribeVpcPeeringConnectionsRequest $args)
    {
        $result = parent::describeVpcPeeringConnections($args->toArray());
        return new DescribeVpcPeeringConnectionsResponse($result->toArray());
    }
}
