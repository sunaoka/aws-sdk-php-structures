<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CongestionPricing'|'Environmental'|'Vignette' $Category
 */
class RouteAvoidanceZoneCategory extends Shape
{
    /**
     * @param array{Category: 'CongestionPricing'|'Environmental'|'Vignette'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
