<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetRoutes;

trait GetRoutesTrait
{
    /**
     * @param GetRoutesRequest $args
     * @return GetRoutesResponse
     */
    public function getRoutes(GetRoutesRequest $args)
    {
        $result = parent::getRoutes($args->toArray());
        return new GetRoutesResponse($result->toArray());
    }
}
