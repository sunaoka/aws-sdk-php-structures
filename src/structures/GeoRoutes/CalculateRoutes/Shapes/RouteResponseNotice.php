<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MainLanguageNotFound'|'Other'|'TravelTimeExceedsDriverWorkHours' $Code
 * @property 'High'|'Low' $Impact
 */
class RouteResponseNotice extends Shape
{
    /**
     * @param array{
     *     Code: 'MainLanguageNotFound'|'Other'|'TravelTimeExceedsDriverWorkHours',
     *     Impact?: 'High'|'Low'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
