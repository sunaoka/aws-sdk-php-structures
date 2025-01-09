<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteTollPriceSummary $Total
 */
class RouteTollSummary extends Shape
{
    /**
     * @param array{Total?: RouteTollPriceSummary} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
