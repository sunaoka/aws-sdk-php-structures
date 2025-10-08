<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateRoute;

trait UpdateRouteTrait
{
    /**
     * @param UpdateRouteRequest $args
     * @return UpdateRouteResponse
     */
    public function updateRoute(UpdateRouteRequest $args)
    {
        $result = parent::updateRoute($args->toArray());
        return new UpdateRouteResponse($result->toArray());
    }
}
