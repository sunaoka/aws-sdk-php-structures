<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetRouteResponse;

trait GetRouteResponseTrait
{
    /**
     * @param GetRouteResponseRequest $args
     * @return GetRouteResponseResponse
     */
    public function getRouteResponse(GetRouteResponseRequest $args)
    {
        $result = parent::getRouteResponse($args->toArray());
        return new GetRouteResponseResponse($result->toArray());
    }
}
