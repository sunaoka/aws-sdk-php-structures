<?php

namespace Sunaoka\Aws\Structures\Kafka\ListVpcConnections;

trait ListVpcConnectionsTrait
{
    /**
     * @param ListVpcConnectionsRequest $args
     * @return ListVpcConnectionsResponse
     */
    public function listVpcConnections(ListVpcConnectionsRequest $args)
    {
        $result = parent::listVpcConnections($args->toArray());
        return new ListVpcConnectionsResponse($result->toArray());
    }
}
