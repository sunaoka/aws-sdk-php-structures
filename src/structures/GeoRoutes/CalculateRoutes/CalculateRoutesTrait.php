<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes;

trait CalculateRoutesTrait
{
    /**
     * @param CalculateRoutesRequest $args
     * @return CalculateRoutesResponse
     */
    public function calculateRoutes(CalculateRoutesRequest $args)
    {
        $result = parent::calculateRoutes($args->toArray());
        return new CalculateRoutesResponse($result->toArray());
    }
}
