<?php

namespace Sunaoka\Aws\Structures\Ec2\RejectVpcEndpointConnections;

trait RejectVpcEndpointConnectionsTrait
{
    /**
     * @param RejectVpcEndpointConnectionsRequest $args
     * @return RejectVpcEndpointConnectionsResponse
     */
    public function rejectVpcEndpointConnections(RejectVpcEndpointConnectionsRequest $args)
    {
        $result = parent::rejectVpcEndpointConnections($args->toArray());
        return new RejectVpcEndpointConnectionsResponse($result->toArray());
    }
}
