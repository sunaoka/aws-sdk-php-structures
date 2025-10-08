<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayRoute;

trait DeleteTransitGatewayRouteTrait
{
    /**
     * @param DeleteTransitGatewayRouteRequest $args
     * @return DeleteTransitGatewayRouteResponse
     */
    public function deleteTransitGatewayRoute(DeleteTransitGatewayRouteRequest $args)
    {
        $result = parent::deleteTransitGatewayRoute($args->toArray());
        return new DeleteTransitGatewayRouteResponse($result->toArray());
    }
}
