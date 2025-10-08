<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateRouteResponse;

trait CreateRouteResponseTrait
{
    /**
     * @param CreateRouteResponseRequest $args
     * @return CreateRouteResponseResponse
     */
    public function createRouteResponse(CreateRouteResponseRequest $args)
    {
        $result = parent::createRouteResponse($args->toArray());
        return new CreateRouteResponseResponse($result->toArray());
    }
}
