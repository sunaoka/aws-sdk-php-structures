<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CongestionPricing'|'Environmental'|'Vignette'|null $Category
 */
class IsolineAvoidanceZoneCategory extends Shape
{
    /**
     * @param array{Category?: 'CongestionPricing'|'Environmental'|'Vignette'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
