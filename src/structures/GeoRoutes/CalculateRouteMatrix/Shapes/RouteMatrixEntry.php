<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Distance
 * @property int $Duration
 * @property 'NoMatch'|'NoMatchDestination'|'NoMatchOrigin'|'NoRoute'|'OutOfBounds'|'OutOfBoundsDestination'|'OutOfBoundsOrigin'|'Other'|'Violation' $Error
 */
class RouteMatrixEntry extends Shape
{
    /**
     * @param array{
     *     Distance: int,
     *     Duration: int,
     *     Error?: 'NoMatch'|'NoMatchDestination'|'NoMatchOrigin'|'NoRoute'|'OutOfBounds'|'OutOfBoundsDestination'|'OutOfBoundsOrigin'|'Other'|'Violation'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
