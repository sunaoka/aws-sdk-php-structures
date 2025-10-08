<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateRoute;

trait CreateRouteTrait
{
    /**
     * @param CreateRouteRequest $args
     * @return CreateRouteResponse
     */
    public function createRoute(CreateRouteRequest $args)
    {
        $result = parent::createRoute($args->toArray());
        return new CreateRouteResponse($result->toArray());
    }
}
