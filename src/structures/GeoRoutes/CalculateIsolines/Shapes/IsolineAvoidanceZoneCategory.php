<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CongestionPricing'|'Environmental'|'Vignette' $Category
 */
class IsolineAvoidanceZoneCategory extends Shape
{
    /**
     * @param array{Category?: 'CongestionPricing'|'Environmental'|'Vignette'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
