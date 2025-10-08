<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayRoute;

trait CreateTransitGatewayRouteTrait
{
    /**
     * @param CreateTransitGatewayRouteRequest $args
     * @return CreateTransitGatewayRouteResponse
     */
    public function createTransitGatewayRoute(CreateTransitGatewayRouteRequest $args)
    {
        $result = parent::createTransitGatewayRoute($args->toArray());
        return new CreateTransitGatewayRouteResponse($result->toArray());
    }
}
