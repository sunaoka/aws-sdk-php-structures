<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListPrivateConnections;

trait ListPrivateConnectionsTrait
{
    /**
     * @param ListPrivateConnectionsRequest $args
     * @return ListPrivateConnectionsResponse
     */
    public function listPrivateConnections(ListPrivateConnectionsRequest $args)
    {
        $result = parent::listPrivateConnections($args->toArray());
        return new ListPrivateConnectionsResponse($result->toArray());
    }
}
