<?php

namespace Sunaoka\Aws\Structures\Glue\GetConnections;

trait GetConnectionsTrait
{
    /**
     * @param GetConnectionsRequest $args
     * @return GetConnectionsResponse
     */
    public function getConnections(GetConnectionsRequest $args)
    {
        $result = parent::getConnections($args->toArray());
        return new GetConnectionsResponse($result->toArray());
    }
}
