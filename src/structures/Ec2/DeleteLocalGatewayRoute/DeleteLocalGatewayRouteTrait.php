<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLocalGatewayRoute;

trait DeleteLocalGatewayRouteTrait
{
    /**
     * @param DeleteLocalGatewayRouteRequest $args
     * @return DeleteLocalGatewayRouteResponse
     */
    public function deleteLocalGatewayRoute(DeleteLocalGatewayRouteRequest $args)
    {
        $result = parent::deleteLocalGatewayRoute($args->toArray());
        return new DeleteLocalGatewayRouteResponse($result->toArray());
    }
}
