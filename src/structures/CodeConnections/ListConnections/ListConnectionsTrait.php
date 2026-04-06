<?php

namespace Sunaoka\Aws\Structures\CodeConnections\ListConnections;

trait ListConnectionsTrait
{
    /**
     * @param ListConnectionsRequest $args
     * @return ListConnectionsResponse
     */
    public function listConnections(ListConnectionsRequest $args)
    {
        $result = parent::listConnections($args->toArray());
        return new ListConnectionsResponse($result->toArray());
    }
}
