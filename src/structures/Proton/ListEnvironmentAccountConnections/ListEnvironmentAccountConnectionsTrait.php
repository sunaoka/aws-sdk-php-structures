<?php

namespace Sunaoka\Aws\Structures\Proton\ListEnvironmentAccountConnections;

trait ListEnvironmentAccountConnectionsTrait
{
    /**
     * @param ListEnvironmentAccountConnectionsRequest $args
     * @return ListEnvironmentAccountConnectionsResponse
     */
    public function listEnvironmentAccountConnections(ListEnvironmentAccountConnectionsRequest $args)
    {
        $result = parent::listEnvironmentAccountConnections($args->toArray());
        return new ListEnvironmentAccountConnectionsResponse($result->toArray());
    }
}
