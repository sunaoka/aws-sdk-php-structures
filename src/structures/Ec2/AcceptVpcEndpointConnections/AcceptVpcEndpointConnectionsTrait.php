<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptVpcEndpointConnections;

trait AcceptVpcEndpointConnectionsTrait
{
    /**
     * @param AcceptVpcEndpointConnectionsRequest $args
     * @return AcceptVpcEndpointConnectionsResponse
     */
    public function acceptVpcEndpointConnections(AcceptVpcEndpointConnectionsRequest $args)
    {
        $result = parent::acceptVpcEndpointConnections($args->toArray());
        return new AcceptVpcEndpointConnectionsResponse($result->toArray());
    }
}
