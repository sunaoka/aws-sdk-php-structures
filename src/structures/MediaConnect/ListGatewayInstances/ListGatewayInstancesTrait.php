<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListGatewayInstances;

trait ListGatewayInstancesTrait
{
    /**
     * @param ListGatewayInstancesRequest $args
     * @return ListGatewayInstancesResponse
     */
    public function listGatewayInstances(ListGatewayInstancesRequest $args)
    {
        $result = parent::listGatewayInstances($args->toArray());
        return new ListGatewayInstancesResponse($result->toArray());
    }
}
