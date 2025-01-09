<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FlowEventThresholdOverride
 * @property 'IgnoreTrafficData'|'UseTrafficData' $Usage
 */
class IsolineTrafficOptions extends Shape
{
    /**
     * @param array{
     *     FlowEventThresholdOverride?: int,
     *     Usage?: 'IgnoreTrafficData'|'UseTrafficData'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
