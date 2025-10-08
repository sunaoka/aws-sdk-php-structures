<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayRoute;

trait CreateLocalGatewayRouteTrait
{
    /**
     * @param CreateLocalGatewayRouteRequest $args
     * @return CreateLocalGatewayRouteResponse
     */
    public function createLocalGatewayRoute(CreateLocalGatewayRouteRequest $args)
    {
        $result = parent::createLocalGatewayRoute($args->toArray());
        return new CreateLocalGatewayRouteResponse($result->toArray());
    }
}
