<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRoute;

trait CalculateRouteTrait
{
    /**
     * @param CalculateRouteRequest $args
     * @return CalculateRouteResponse
     */
    public function calculateRoute(CalculateRouteRequest $args)
    {
        $result = parent::calculateRoute($args->toArray());
        return new CalculateRouteResponse($result->toArray());
    }
}
