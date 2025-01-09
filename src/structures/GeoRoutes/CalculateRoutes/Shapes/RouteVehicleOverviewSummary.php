<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BestCaseDuration
 * @property int $Distance
 * @property int $Duration
 * @property int $TypicalDuration
 */
class RouteVehicleOverviewSummary extends Shape
{
    /**
     * @param array{
     *     BestCaseDuration?: int,
     *     Distance: int,
     *     Duration: int,
     *     TypicalDuration?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
