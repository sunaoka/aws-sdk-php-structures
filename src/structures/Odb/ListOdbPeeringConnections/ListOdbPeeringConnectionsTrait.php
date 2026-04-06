<?php

namespace Sunaoka\Aws\Structures\Odb\ListOdbPeeringConnections;

trait ListOdbPeeringConnectionsTrait
{
    /**
     * @param ListOdbPeeringConnectionsRequest $args
     * @return ListOdbPeeringConnectionsResponse
     */
    public function listOdbPeeringConnections(ListOdbPeeringConnectionsRequest $args)
    {
        $result = parent::listOdbPeeringConnections($args->toArray());
        return new ListOdbPeeringConnectionsResponse($result->toArray());
    }
}
