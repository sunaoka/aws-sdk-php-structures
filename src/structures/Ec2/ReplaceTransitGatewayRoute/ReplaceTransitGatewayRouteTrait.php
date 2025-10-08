<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceTransitGatewayRoute;

trait ReplaceTransitGatewayRouteTrait
{
    /**
     * @param ReplaceTransitGatewayRouteRequest $args
     * @return ReplaceTransitGatewayRouteResponse
     */
    public function replaceTransitGatewayRoute(ReplaceTransitGatewayRouteRequest $args)
    {
        $result = parent::replaceTransitGatewayRoute($args->toArray());
        return new ReplaceTransitGatewayRouteResponse($result->toArray());
    }
}
