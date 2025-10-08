<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListGatewayRoutes;

trait ListGatewayRoutesTrait
{
    /**
     * @param ListGatewayRoutesRequest $args
     * @return ListGatewayRoutesResponse
     */
    public function listGatewayRoutes(ListGatewayRoutesRequest $args)
    {
        $result = parent::listGatewayRoutes($args->toArray());
        return new ListGatewayRoutesResponse($result->toArray());
    }
}
