<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateGatewayRoute;

trait CreateGatewayRouteTrait
{
    /**
     * @param CreateGatewayRouteRequest $args
     * @return CreateGatewayRouteResponse
     */
    public function createGatewayRoute(CreateGatewayRouteRequest $args)
    {
        $result = parent::createGatewayRoute($args->toArray());
        return new CreateGatewayRouteResponse($result->toArray());
    }
}
