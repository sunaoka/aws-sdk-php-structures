<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Duration
 */
class RoutePedestrianTravelOnlySummary extends Shape
{
    /**
     * @param array{Duration: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
