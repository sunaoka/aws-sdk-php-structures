<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295>|null $BestCaseDuration
 * @property int<0, 4294967295> $Distance
 * @property int<0, 4294967295> $Duration
 * @property int<0, 4294967295>|null $TypicalDuration
 */
class RouteVehicleOverviewSummary extends Shape
{
    /**
     * @param array{
     *     BestCaseDuration?: int<0, 4294967295>|null,
     *     Distance: int<0, 4294967295>,
     *     Duration: int<0, 4294967295>,
     *     TypicalDuration?: int<0, 4294967295>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
