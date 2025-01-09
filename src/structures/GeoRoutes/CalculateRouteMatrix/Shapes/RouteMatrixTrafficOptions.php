<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $FlowEventThresholdOverride
 * @property 'IgnoreTrafficData'|'UseTrafficData' $Usage
 */
class RouteMatrixTrafficOptions extends Shape
{
    /**
     * @param array{
     *     FlowEventThresholdOverride?: int<0, 4294967295>,
     *     Usage?: 'IgnoreTrafficData'|'UseTrafficData'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
