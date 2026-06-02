<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MainLanguageNotFound'|'Other'|'TravelTimeExceedsDriverWorkHours'|'TransitDataUnavailable'|'TransitRouteUnavailable'|'NoTransitStationsFound' $Code
 * @property 'High'|'Low'|null $Impact
 */
class RouteResponseNotice extends Shape
{
    /**
     * @param array{
     *     Code: 'MainLanguageNotFound'|'Other'|'TravelTimeExceedsDriverWorkHours'|'TransitDataUnavailable'|'TransitRouteUnavailable'|'NoTransitStationsFound',
     *     Impact?: 'High'|'Low'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
