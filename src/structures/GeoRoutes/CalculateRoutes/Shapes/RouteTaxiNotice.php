<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccuratePolylineUnavailable'|'Other' $Code
 * @property 'High'|'Low'|null $Impact
 */
class RouteTaxiNotice extends Shape
{
    /**
     * @param array{
     *     Code: 'AccuratePolylineUnavailable'|'Other',
     *     Impact?: 'High'|'Low'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
