<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateRouteResponse;

trait UpdateRouteResponseTrait
{
    /**
     * @param UpdateRouteResponseRequest $args
     * @return UpdateRouteResponseResponse
     */
    public function updateRouteResponse(UpdateRouteResponseRequest $args)
    {
        $result = parent::updateRouteResponse($args->toArray());
        return new UpdateRouteResponseResponse($result->toArray());
    }
}
