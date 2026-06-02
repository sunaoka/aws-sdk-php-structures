<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteAccessibilityAvailabilityDetails|null $Accessibility
 */
class RouteAccessPointDetails extends Shape
{
    /**
     * @param array{Accessibility?: RouteAccessibilityAvailabilityDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
