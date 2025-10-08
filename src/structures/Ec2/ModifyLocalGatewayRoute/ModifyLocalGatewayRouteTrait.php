<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyLocalGatewayRoute;

trait ModifyLocalGatewayRouteTrait
{
    /**
     * @param ModifyLocalGatewayRouteRequest $args
     * @return ModifyLocalGatewayRouteResponse
     */
    public function modifyLocalGatewayRoute(ModifyLocalGatewayRouteRequest $args)
    {
        $result = parent::modifyLocalGatewayRoute($args->toArray());
        return new ModifyLocalGatewayRouteResponse($result->toArray());
    }
}
