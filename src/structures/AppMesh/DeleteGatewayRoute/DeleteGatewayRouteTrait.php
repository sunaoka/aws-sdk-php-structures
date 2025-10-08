<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteGatewayRoute;

trait DeleteGatewayRouteTrait
{
    /**
     * @param DeleteGatewayRouteRequest $args
     * @return DeleteGatewayRouteResponse
     */
    public function deleteGatewayRoute(DeleteGatewayRouteRequest $args)
    {
        $result = parent::deleteGatewayRoute($args->toArray());
        return new DeleteGatewayRouteResponse($result->toArray());
    }
}
