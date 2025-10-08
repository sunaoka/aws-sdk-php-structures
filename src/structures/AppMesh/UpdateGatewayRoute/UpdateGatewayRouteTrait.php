<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateGatewayRoute;

trait UpdateGatewayRouteTrait
{
    /**
     * @param UpdateGatewayRouteRequest $args
     * @return UpdateGatewayRouteResponse
     */
    public function updateGatewayRoute(UpdateGatewayRouteRequest $args)
    {
        $result = parent::updateGatewayRoute($args->toArray());
        return new UpdateGatewayRouteResponse($result->toArray());
    }
}
