<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListVPCConnections;

trait ListVPCConnectionsTrait
{
    /**
     * @param ListVPCConnectionsRequest $args
     * @return ListVPCConnectionsResponse
     */
    public function listVPCConnections(ListVPCConnectionsRequest $args)
    {
        $result = parent::listVPCConnections($args->toArray());
        return new ListVPCConnectionsResponse($result->toArray());
    }
}
