<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix;

trait CalculateRouteMatrixTrait
{
    /**
     * @param CalculateRouteMatrixRequest $args
     * @return CalculateRouteMatrixResponse
     */
    public function calculateRouteMatrix(CalculateRouteMatrixRequest $args)
    {
        $result = parent::calculateRouteMatrix($args->toArray());
        return new CalculateRouteMatrixResponse($result->toArray());
    }
}
