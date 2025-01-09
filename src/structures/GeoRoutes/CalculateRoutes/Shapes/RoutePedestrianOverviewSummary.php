<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Distance
 * @property int $Duration
 */
class RoutePedestrianOverviewSummary extends Shape
{
    /**
     * @param array{
     *     Distance: int,
     *     Duration: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
