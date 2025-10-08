<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClientVpcConnections;

trait ListClientVpcConnectionsTrait
{
    /**
     * @param ListClientVpcConnectionsRequest $args
     * @return ListClientVpcConnectionsResponse
     */
    public function listClientVpcConnections(ListClientVpcConnectionsRequest $args)
    {
        $result = parent::listClientVpcConnections($args->toArray());
        return new ListClientVpcConnectionsResponse($result->toArray());
    }
}
