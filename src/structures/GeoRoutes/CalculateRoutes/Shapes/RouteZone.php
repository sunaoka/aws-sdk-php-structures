<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CongestionPricing'|'Environmental'|'Vignette' $Category
 * @property string $Name
 */
class RouteZone extends Shape
{
    /**
     * @param array{
     *     Category?: 'CongestionPricing'|'Environmental'|'Vignette',
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
