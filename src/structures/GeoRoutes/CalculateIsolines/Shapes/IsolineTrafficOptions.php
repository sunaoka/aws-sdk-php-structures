<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295>|null $FlowEventThresholdOverride
 * @property 'IgnoreTrafficData'|'UseTrafficData'|null $Usage
 */
class IsolineTrafficOptions extends Shape
{
    /**
     * @param array{
     *     FlowEventThresholdOverride?: int<0, 4294967295>|null,
     *     Usage?: 'IgnoreTrafficData'|'UseTrafficData'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
