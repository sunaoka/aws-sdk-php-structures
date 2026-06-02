<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteAccessibilityAvailabilityDetails|null $Accessibility
 * @property string|null $PlatformName
 * @property string|null $ShortName
 */
class RouteStationDetails extends Shape
{
    /**
     * @param array{
     *     Accessibility?: RouteAccessibilityAvailabilityDetails|null,
     *     PlatformName?: string|null,
     *     ShortName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
