<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $Distance
 * @property int<0, 4294967295> $Duration
 * @property 'NoMatch'|'NoMatchDestination'|'NoMatchOrigin'|'NoRoute'|'OutOfBounds'|'OutOfBoundsDestination'|'OutOfBoundsOrigin'|'Other'|'Violation' $Error
 */
class RouteMatrixEntry extends Shape
{
    /**
     * @param array{
     *     Distance: int<0, 4294967295>,
     *     Duration: int<0, 4294967295>,
     *     Error?: 'NoMatch'|'NoMatchDestination'|'NoMatchOrigin'|'NoRoute'|'OutOfBounds'|'OutOfBoundsDestination'|'OutOfBoundsOrigin'|'Other'|'Violation'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
