<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Available'|'Limited'|'Unavailable'|'Unknown'|null $Wheelchair
 */
class RouteAccessibilityAvailabilityDetails extends Shape
{
    /**
     * @param array{Wheelchair?: 'Available'|'Limited'|'Unavailable'|'Unknown'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
