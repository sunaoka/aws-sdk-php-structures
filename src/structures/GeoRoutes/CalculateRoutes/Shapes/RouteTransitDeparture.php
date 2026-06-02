<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295>|null $Delay
 * @property RouteTransitPlace $Place
 * @property 'Added'|'Cancelled'|'Replaced'|'Scheduled'|null $Status
 * @property string|null $Time
 */
class RouteTransitDeparture extends Shape
{
    /**
     * @param array{
     *     Delay?: int<0, 4294967295>|null,
     *     Place: RouteTransitPlace,
     *     Status?: 'Added'|'Cancelled'|'Replaced'|'Scheduled'|null,
     *     Time?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
