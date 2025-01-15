<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CongestionPricing'|'Environmental'|'Vignette'|null $Category
 * @property string|null $Name
 */
class RouteZone extends Shape
{
    /**
     * @param array{
     *     Category?: 'CongestionPricing'|'Environmental'|'Vignette'|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
